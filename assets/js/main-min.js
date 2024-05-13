jQuery(function ($) {
    $(".checkLiveDemo").on("click", function () { gtag4("event", "Click_Demo", { event_category: "Demo", }) }); $(".topHeader a.link-click").on("click", function () { gtag4("event", "Top_Strip_Click", { event_category: "Header_Strip", }) }); $(".cargoxCta").on("click", function () { gtag4("event", "CargoX_Click", { event_category: "ShiprocketX", }) }); $(".shipxCta").on("click", function () { gtag4("event", "ShipX_Click", { event_category: "ShiprocketX", }) }); $(".openApp").on("click", function () { gtag4("event", "Open_in_app", { event_category: "Shiprocket", }) }); $(".loginCta").on("click", function () { gtag4("event", "Login_Click", { event_category: "Shiprocket", }) }); $(".registerCta").on("click", function () { gtag4("event", "Register_Click", { event_category: "Shiprocket", }) }); $(".button-light-blue, .whiteBtn, .blueBtn, .linkBtn").addClass("link-click"); function getUserPlatformInCF() { var userAgent = navigator.userAgent.toLowerCase(); if (userAgent.match(/android/)) { return "mweb" } else if (userAgent.match(/iphone|ipad|ipod/)) { return "mweb" } else if (userAgent.match(/mobile|android|iphone|ipad|ipod/)) { return "mweb" } else { return "web" } }
    var userPlatform = getUserPlatformInCF(); var referrer = document.referrer; var pathname = document.location.pathname; var searchParams = new URLSearchParams(document.location.search); var UTM = {}; function setCookie(cname, cvalue, exdays) { var d = new Date(); d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000); var expires = "expires=" + d.toUTCString(); cvalue = cvalue == "null" ? "" : cvalue; document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/" + ";domain=.shiprocket.in" }
    function getParsedCookie(val) { return val ? JSON.parse(decodeURIComponent(val)) : {} }
    function getCookie(cname) {
        var name = cname + "="; var ca = document.cookie.split(";"); for (var i = 0; i < ca.length; i++) {
            var c = ca[i]; while (c.charAt(0) == " ") { c = c.substring(1) }
            if (c.indexOf(name) == 0) { return c.substring(name.length, c.length) }
        }
        return ""
    }
    function setFirstUTM() { setCookie("first_utm", JSON.stringify(getParsedCookie(getCookie("UTM"))), 30) }
    if (!getCookie("first_utm") && getCookie("UTM")) { setFirstUTM() }
    var parsedUtm = getParsedCookie(getCookie("UTM")); if (!getCookie("UTM")) { UTM.pathname = pathname; UTM.referrer = referrer } else { UTM.pathname = parsedUtm.pathname; UTM.referrer = parsedUtm.referrer }
    var paramsKeys = ["utm_source", "utm_campaign", "utm_content", "utm_medium", "utm_term",]; for (var i = 0; i < paramsKeys.length; i++) { var key = paramsKeys[i]; if (searchParams.get(key)) { UTM[key] = searchParams.get(key) } else if (getCookie("UTM")) { var parsedUTMData = parsedUtm; if (parsedUTMData[key]) { UTM[key] = parsedUtm[key] } } }
    setCookie("UTM", JSON.stringify(UTM), 30); if (!getCookie("first_utm") && getCookie("UTM")) { setFirstUTM() }
    function getParams() {
        var params = ""; if ("utm_source" in window.location.search) { params = window.location.search + "&pathname=" + getCookie("pathname") + "&referrer=" + getCookie("referrer") } else { params = "?pathname=" + getCookie("pathname") + "&referrer=" + getCookie("referrer") + "&utm_source=" + getCookie("utm_source") + "&utm_campaign=" + getCookie("utm_campaign") + "&utm_content=" + getCookie("utm_content") + "&utm_term=" + getCookie("utm_term") }
        return params
    }
    $(".link-click").click(function () { var href = $(this).attr("href"); var button_text = $(this).text(); webengage.track("Clicked on Link", { cta_text: button_text, destination_url: href, }) }); $(".Get_Ref_code").click(function () { var href = $(this).attr("href"); var button_text = "Get_Ref_code"; webengage.track("Get_Ref_code", { cta_text: button_text, destination_url: href, }) }); function readCookieInForm(name) {
        var nameEQ = name + "="; var ca = document.cookie.split(";"); for (var i = 0; i < ca.length; i++) { var c = ca[i]; while (c.charAt(0) == " ") c = c.substring(1, c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length) }
        return null
    }
    var getUTMs = JSON.parse(readCookieInForm("UTM")); var first_referrer = getUTMs.referrer; var pathname = getUTMs.pathname; $("input[name=utm_source]").val(getUTMs?.utm_source || ""); $("input[name=utm_medium]").val(getUTMs?.utm_medium || ""); $("input[name=utm_campaign]").val(getUTMs?.utm_campaign || ""); $("input[name=utm_term]").val(getUTMs?.utm_term || ""); $("input[name=utm_content]").val(getUTMs?.utm_content || ""); $("input[name=utm_link]").val(location.href); $("input[name=utm_referrer]").val(referrer); $("input[name=first_referrer]").val(first_referrer); $("input[name=pathname]").val(pathname); $("input[name=device]").val(userPlatform)
}); var currentURL = window.location.pathname; var existingHistory = getCookie("browse_history"); var historyArray = existingHistory ? existingHistory.split(",") : []; if (historyArray.length === 0 || historyArray[historyArray.length - 1] !== currentURL) { historyArray.push(currentURL) }
if (historyArray.length > 10) { historyArray = historyArray.slice(-10) }
var updatedHistory = historyArray.join(","); var expiryDate = new Date(); expiryDate.setDate(expiryDate.getDate() + 30); var domain = window.location.hostname.replace(/^www\./, ""); document.cookie = "browse_history=" + updatedHistory + "; expires=" + expiryDate.toUTCString() + "; domain=" + domain + "; path=/;"; function getCookie(name) {
    var cookieArr = document.cookie.split(";"); for (var i = 0; i < cookieArr.length; i++) { var cookiePair = cookieArr[i].split("="); if (name == cookiePair[0].trim()) { return decodeURIComponent(cookiePair[1]) } }
    return null
}