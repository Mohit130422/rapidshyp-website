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
    document.cookie = `${name}=${value};${expires};path=/;domain=.rapidshyp.com`;
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

    // Always set/update latest_utm with current params
    utmParams.forEach(param => {
        if (params[param]) {
            latestUtm[param] = params[param];
        }
    });
    setCookie('latest_utm', JSON.stringify(latestUtm), 30); // Store for 30 days

     // Retrieve existing referrer data from cookies
     let existingInitialReferrer = getCookie('initial_referrer');
     let existingReferrer= getCookie('referrer');
 
     // If referrer doesn't exist, set it with current referrer
     if (!existingInitialReferrer) {
         setCookie('initial_referrer', document.referrer, 365); // Store for 1 year
         setCookie('referrer', document.referrer, 365); // Store for 1 year
     } else {
         // If initial_referrer exists and referrer doesn't exist or is different, update initial_referrer
         if (!existingReferrer || existingReferrer !== document.referrer) {
             setCookie('referrer', document.referrer, 365); // Store for 1 year
         }
     }
 
     // Store last visited page URL
     setCookie('last_visited_page', window.location.href, 30); // Store for 30 days
 
     // Log the UTM data for debugging
     console.log('First UTM:', existingFirstUtm ? JSON.parse(existingFirstUtm) : firstUtm);
     console.log('Latest UTM:', latestUtm);
     console.log('Referrer:', existingReferrer || document.referrer);
     console.log('Initial Referrer:', document.referrer);
     console.log('Last Visited Page:', window.location.href);
}

// Store UTM params when the page loads
window.onload = storeUtmParams;