// Load iframe with UTM parameters
window.onload = function () {
    function getUTMParams() {
        const urlParams = new URLSearchParams(window.location.search);
        const utmParams = convertQueryParamsToObject(urlParams);

        // Handle first_utm parameters
        let firstUtmData = null;
        const storedFirstUtm = localStorage.getItem('first_utm_data');

        // Check if we have valid first_utm data
        if (storedFirstUtm) {
            firstUtmData = JSON.parse(storedFirstUtm);
            const storedDate = new Date(firstUtmData.timestamp);
            const currentDate = new Date();
            const diffTime = currentDate.getTime() - storedDate.getTime();
            const diffDays = diffTime / (1000 * 3600 * 24);

            // Clear if older than 30 days
            if (diffDays > 30) {
                localStorage.removeItem('first_utm_data');
                firstUtmData = null;
            }
        }

        // Capture new first_utm data if needed
        if (!firstUtmData) {
            const currentUtms = {};
            const utmKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'matchtype'];

            utmKeys.forEach(key => {
                const value = urlParams.get(key);
                if (value) currentUtms[key] = value;
            });

            if (Object.keys(currentUtms).length > 0) {
                firstUtmData = {
                    utms: currentUtms,
                    timestamp: new Date().toISOString()
                };
                localStorage.setItem('first_utm_data', JSON.stringify(firstUtmData));
            }
        }

        // Add first_utm_* parameters to utmParams
        if (firstUtmData) {
            Object.entries(firstUtmData.utms).forEach(([key, value]) => {
                utmParams[`first_${key}`] = value;
            });
        }
        // Handle initial_referrer
        let initialReferrerData = localStorage.getItem('initial_referrer_data');
        if (initialReferrerData) {
            initialReferrerData = JSON.parse(initialReferrerData);
            const diffDays = (new Date() - new Date(initialReferrerData.timestamp)) / (1000 * 3600 * 24);
            if (diffDays > 365) {
                localStorage.removeItem('initial_referrer_data');
                initialReferrerData = null;
            }
        }

        if (!initialReferrerData && document.referrer) {
            initialReferrerData = {
                value: document.referrer,
                timestamp: new Date().toISOString()
            };
            localStorage.setItem('initial_referrer_data', JSON.stringify(initialReferrerData));
        }

        utmParams.referrer = document.referrer;
        utmParams.initial_referrer = initialReferrerData?.value || document.referrer;

        // Existing persistence logic
        if (!localStorage.getItem('last_visited_page')) {
            localStorage.setItem('last_visited_page', window.top.location.href);
        }
        utmParams.last_visited_page = localStorage.getItem('last_visited_page');
        utmParams.landing_page = sessionStorage.getItem('landing_page') || window.top.location.href;

        // Store session values
        if (!sessionStorage.getItem('landing_page')) {
            sessionStorage.setItem('landing_page', window.location.href);
        }
        if (!sessionStorage.getItem('initial_referrer')) {
            sessionStorage.setItem('initial_referrer', document.referrer);
        }

        return utmParams;
    }

    function convertQueryParamsToObject(urlParams) {
        const paramsObj = {};
        urlParams.forEach((value, key) => {
            paramsObj[key] = value;
        });
        return paramsObj;
    }

    const utmParams = getUTMParams();
    const utmString = Object.keys(utmParams).length ? '?' + new URLSearchParams(utmParams).toString() : '';
    const iframeUrl = `https://app.rapidshyp.com`;
    // const iframeUrl = `https://qa.rapidshyp.com`;

    // console.log("Generated iframe URL:", iframeUrl);
    console.log("UTM Parameters Object:", utmParams);

    loadIframe(iframeUrl, utmParams);
    window.addEventListener('message', (event) => {
        // Optional: Check origin for security
        // if (event.origin !== 'https://qa.rapidshyp.com') return;
        
        if (event.data?.type === 'iframe-click') {
            const clickedData = event.data.data;
            console.log('Click inside iframe:', clickedData.token);
            // console.log('Click inside iframe:', clickedData);
    
            const tokenFromClick = clickedData?.token;
            const signupEmail = clickedData?.email;
            const signupPhone = clickedData?.phone;

            if (tokenFromClick) {
                document.cookie = `signUpToken=${encodeURIComponent(tokenFromClick)}; path=/;domain=.rapidshyp.com; secure; samesite=strict`;
            }
    
            // Assuming 'url' and 'parsing' are defined in your scope
            if (signupEmail !== 'undefined' && signupPhone !== undefined) {
                window.location.href = `${iframeUrl}/?email=${signupEmail}&phone=${signupPhone}&success_key=${encodeURIComponent(tokenFromClick)}`;
                // window.location.href = `${iframeUrl}/session/success?token=${encodeURIComponent(tokenFromClick)}&current_state=MOBILE_VERIFY&agreement_flag=false&sign_up=false`;
            } else {
                console.warn('Missing required data — redirect not performed');
            }
        }
    });
};
