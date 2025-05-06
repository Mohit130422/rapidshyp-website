// Function to get URL parameters
function getUrlParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const regex = /([^&=]+)=([^&]*)/g;
    let m;

    while ((m = regex.exec(queryString))) {
        params[decodeURIComponent(m[1])] = decodeURIComponent(m[2]);
    }

    return params;
}

// Function to set a cookie
function setCookie(name, value, days) {
    const d = new Date();
    d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
    const expires = "expires=" + d.toUTCString();
    document.cookie = `${name}=${value};${expires};path=/;domain=.rapidshyp.com;SameSite=Lax`; // Generalize domain for subdomains
}

// Function to get a cookie
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Function to clean URL by removing everything after "?" (including UTM parameters)
function trimUrl(url) {
    try {
        if (!url || typeof url !== "string") {
            console.error("Invalid URL passed:", url);
            return ""; // Return an empty string if the URL is invalid
        }

        const urlObj = new URL(url);
        return urlObj.origin + urlObj.pathname; // Keep only the base URL without query params
    } catch (error) {
        console.error("Failed to process URL:", url, error);
        return url; // Return original URL if an error occurs
    }
}

// Function to check if a referrer is external
function isExternalReferrer(referrer) {
    try {
        if (!referrer || typeof referrer !== "string") return false; // Handle empty or invalid referrer
        const domain = ".rapidshyp.com";
        const referrerHost = new URL(referrer).hostname;
        return !referrerHost.endsWith(domain);
    } catch (error) {
        console.error("Error processing referrer:", referrer, error);
        return false; // Default to false if there's an error
    }
}

function storeLandingPage() {
    // const currentUrl = window.location.href;
    const currentUrl = window.top.location.href;
    console.log("landingpage"+currentUrl);

    // First, collect UTM parameters before cleaning the URL
    storeUtmParams();

    // Now store the cleaned landing page URL
    const cleanUrl = trimUrl(currentUrl);
    if (!getCookie("landing_page")) {
        setCookie("landing_page", cleanUrl, 30);
    }
}

function storeLastVisitedPage() {
    // const currentUrl = window.location.href;
    const currentUrl = window.top.location.href;
    console.log("last page"+currentUrl);

    // First, collect UTM parameters before cleaning the URL
    storeUtmParams();

    // Now store the cleaned last visited page URL
    const cleanUrl = trimUrl(currentUrl);
    setCookie("last_visited_page", cleanUrl, 1);
}

// Function to store UTM parameters in cookies
function storeUtmParams() {
    const params = getUrlParams();
    const utmParams = ["utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content", "device"];

    const firstUtm = {};
    let latestUtm = {};

    // Retrieve existing UTM data from cookies
    let existingFirstUtm = getCookie("first_utm");
    let existingLatestUtm = getCookie("latest_utm");

    // If first_utm doesn't exist, set it with current params
    if (!existingFirstUtm) {
        utmParams.forEach((param) => {
            if (params[param]) {
                firstUtm[param] = params[param];
            }
        });
        setCookie("first_utm", JSON.stringify(firstUtm), 30); // Store for 30 days
    }

    // Update latest_utm only if there are new UTM parameters
    let latestUtmUpdated = false;
    utmParams.forEach((param) => {
        if (params[param]) {
            latestUtm[param] = params[param];
            latestUtmUpdated = true;
        }
    });

    if (latestUtmUpdated || !existingLatestUtm) {
        setCookie("latest_utm", JSON.stringify(latestUtm), 30); // Store for 30 days
        sessionStorage.setItem("latest_utm", JSON.stringify(latestUtm)); // Store in session storage
    } else if (existingLatestUtm) {
        latestUtm = JSON.parse(existingLatestUtm);
    }

    // Retrieve existing referrer data from cookies
    let existingInitialReferrer = getCookie("initial_referrer");
    let existingReferrer = getCookie("referrer");

    // Check if the referrer is external and update cookies accordingly
    if (isExternalReferrer(document.referrer)) {
        // If initial_referrer doesn't exist, set it with the current referrer
        if (!existingInitialReferrer) {
            setCookie("initial_referrer", document.referrer, 30);
            setCookie("referrer", document.referrer, 30);
        } else {
            // If referrer exists and is different, update referrer
            if (!existingReferrer || existingReferrer !== document.referrer) {
                setCookie("referrer", document.referrer, 30);
            }
        }
    }
}

// Store UTM params, landing page, and last visited page when the page loads
window.onload = function () {
    try {
        storeLandingPage(); // Store landing page URL
        storeLastVisitedPage(); // Store last visited page URL
        storeUtmParams(); // Store UTM parameters if available
    } catch (error) {
        console.error("Error during onload execution:", error);
    }
};
