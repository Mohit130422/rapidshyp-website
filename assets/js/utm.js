// Function to get URL parameters
function getUrlParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const regex = /([^&=]+)=([^&]*)/g;
    let m;

    while (m = regex.exec(queryString)) {
        params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    }

    return params;
}


// Function to set a cookie
function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + d.toUTCString();
    document.cookie = `${name}=${value};${expires};path=/;domain=.rapidshyp.com;SameSite=Lax`; // Generalize domain for subdomains
}

// Function to check if a referrer is external
function isExternalReferrer(referrer) {
    const domain = '.rapidshyp.com'; // Adjust domain to include subdomains
    const referrerHost = new URL(referrer).hostname;
    return !referrerHost.endsWith(domain);
}

// Function to get a cookie
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Function to replace hyphens with underscores in a URL
function replaceHyphens(url) {
    let newUrl = '';
    for (let i = 0; i < url.length; i++) {
        if (url[i] === '-') {
            newUrl += '_';
        } else {
            newUrl += url[i];
        }
    }
    return newUrl;
}

// Function to store landing page URL in a cookie
function storeLandingPage() {
    const landingPageUrl = replaceHyphens(window.location.href);
    console.log(landingPageUrl)
    if (!getCookie('landing_page')) {
        setCookie('landing_page', landingPageUrl, 30); // Store landing page URL for 30 days
    }
}

// Function to store last visited page URL in a cookie
function storeLastVisitedPage() {
    const lastVisitedPageUrl = replaceHyphens(window.location.href);
    setCookie('last_visited_page', lastVisitedPageUrl);
}

// Function to check if a referrer is external
function isExternalReferrer(referrer) {
    const domain = '.rapidshyp.com';
    const referrerHost = new URL(referrer).hostname;
    return !referrerHost.endsWith(domain);
}

// Function to store UTM parameters in cookies
function storeUtmParams() {
    const params = getUrlParams();
    const utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

    const firstUtm = {};
    const latestUtm = {};

    // Retrieve existing UTM data from cookies
    let existingFirstUtm = getCookie('first_utm');
    let existingLatestUtm = getCookie('latest_utm');

    // If first_utm doesn't exist, set it with current params
    if (!existingFirstUtm) {
        utmParams.forEach(param => {
            if (params[param]) {
                firstUtm[param] = params[param];
            }
        });
        setCookie('first_utm', JSON.stringify(firstUtm), 30); // Store for 30 days
    }

     // Update latest_utm only if there are new UTM parameters
     let latestUtmUpdated = false;
     utmParams.forEach(param => {
         if (params[param]) {
             latestUtm[param] = params[param];
             latestUtmUpdated = true;
         }
     });
 
     if (latestUtmUpdated || !existingLatestUtm) {
         setCookie('latest_utm', JSON.stringify(latestUtm), 30); // Store for 30 days
         sessionStorage.setItem('latest_utm', JSON.stringify(latestUtm)); // Store in session storage
     } else if (existingLatestUtm) {
         latestUtm = JSON.parse(existingLatestUtm);
     }

     // Retrieve existing referrer data from cookies
    let existingInitialReferrer = getCookie('initial_referrer');
    let existingReferrer = getCookie('referrer');

    // Check if the referrer is external and update cookies accordingly
    if (isExternalReferrer(document.referrer)) {
        // If initial_referrer doesn't exist, set it with current referrerk
        if (!existingInitialReferrer) {
            setCookie('initial_referrer', document.referrer, 30);
            setCookie('referrer', document.referrer, 30);
        } else {
            // If referrer exists and is different, update referrer
            if (!existingReferrer || existingReferrer !== document.referrer) {
                setCookie('referrer', document.referrer, 30);
            }
        }
    }
 
 
    //  // Log the UTM data for debugging
    //  console.log('First UTM:', existingFirstUtm ? JSON.parse(existingFirstUtm) : firstUtm);
    //  console.log('Latest UTM:', latestUtm);
    //  console.log('Referrer:', existingReferrer || document.referrer);
    //  console.log('Initial Referrer:', document.referrer);
    //  console.log('Last Visited Page:', window.location.href);
}

// Store UTM params, landing page, and last visited page when the page loads
window.onload = function() {
    storeLandingPage();         // Store landing page URL
    storeLastVisitedPage();     // Store last visited page URL
    storeUtmParams();           // Store UTM parameters if available
};