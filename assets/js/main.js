function trackBy(e) {
  e
    ? window.open("https://app.rapidshyp.com/t/" + e, "_blank")
    : $("#responseMessage").html("AWB number is not available.");
}
$(window).on("scroll", function () {
  $(window).scrollTop() > 50
    ? ($(".navbar-expand-lg").addClass("active-head"),
      $(".navbar-collapse").removeClass("show"),
      $("#navbar-close").addClass("hidden"),
      $(".navbar-toggler-icon").removeClass("hidden"))
    : $(".navbar").removeClass("active-head");
}),
  document.addEventListener("DOMContentLoaded", function () {
    const e = document.getElementById("product"),
      t = document.getElementById("product-menu"),
      s = document.getElementById("ship-tools"),
      a = document.getElementById("ship-tools-menu"),
      n = document.getElementById("integrations"),
      o = document.getElementById("integration-menu"),
      r = document.getElementById("resources"),
      i = document.getElementById("resources-menu");
    function l(e) {
      e.classList.add("show");
    }
    function d(e) {
      e.classList.remove("show");
    }
    e.addEventListener("mouseenter", () => l(t)),
      e.addEventListener("mouseleave", () =>
        setTimeout(() => {
          t.matches(":hover") || d(t);
        }, 100)
      ),
      t.addEventListener("mouseenter", () => l(t)),
      t.addEventListener("mouseleave", () => d(t)),
      s.addEventListener("mouseenter", () => l(a)),
      s.addEventListener("mouseleave", () =>
        setTimeout(() => {
          a.matches(":hover") || d(a);
        }, 100)
      ),
      a.addEventListener("mouseenter", () => l(a)),
      a.addEventListener("mouseleave", () => d(a)),
      n.addEventListener("mouseenter", () => l(o)),
      n.addEventListener("mouseleave", () =>
        setTimeout(() => {
          o.matches(":hover") || d(o);
        }, 100)
      ),
      o.addEventListener("mouseenter", () => l(o)),
      o.addEventListener("mouseleave", () => d(o)),
      r.addEventListener("mouseenter", () => l(i)),
      r.addEventListener("mouseleave", () =>
        setTimeout(() => {
          i.matches(":hover") || d(i);
        }, 100)
      ),
      i.addEventListener("mouseenter", () => l(i)),
      i.addEventListener("mouseleave", () => d(i)),
      document.addEventListener("scroll", function () {
        d(a), d(o);
      });
  }),
  $(document).ready(function () {
    function e(e) {
      "order_id" === e
        ? ($("#orderInput").removeClass("hidden"),
          $("#awbInput").addClass("hidden"))
        : ($("#orderInput").addClass("hidden"),
          $("#awbInput").removeClass("hidden"));
    }
    $(function () {
      $("#ChangeToggle").click(function () {
        $(".navbar-toggler-icon").toggleClass("hidden"),
          $("#navbar-close").toggleClass("hidden");
      });
    }),
      $(".active").on(
        "mouseenter",
        function () {
          $(this).carousel("pause");
        },
        function () {
          $(this).carousel("cycle");
        }
      ),
      $(".openWaitlistModal").click(function () {
        $("#joinWaitlistModal").css("display", "flex");
      }),
      $(".close").click(function () {
        $("#joinWaitlistModal").hide(), $("#diwaliOffer").hide();
      }),
      $("#submit-button").submit(function (e) {
        var t = $("#useremail").val();
        return (
          $("#joinWaitlistModal").css("display", "flex"), $("#email").val(t), !1
        );
      }),
      $(".scrollDown").click(function () {
        $("html, body").animate({ scrollTop: $("#rateCal").offset().top }, 100);
      }),
      $("#explore-form").submit(function (e) {
        var t = $("#explore-email").val();
        return (
          $("#joinWaitlistModal").css("display", "flex"), $("#email").val(t), !1
        );
      }),
      $(".php-email-form").on("submit", function (e) {
        e.preventDefault();
        var t = $(this).serializeArray(),
          s = {};
        t.forEach(function (e) {
          s[e.name] = e.value;
        });
        var a = JSON.stringify(s);
        return (
          $(".loading").show(),
          $(".error-message").hide(),
          $(".sent-message").hide(),
          $.ajax({
            url: "https://www.rapidshyp.com/webhooks/receive_lead.php",
            type: "POST",
            data: a,
            contentType: "application/json",
            dataType: "json",
            success: function (e) {
              e.success
                ? ($(".sent-message").text(e.message),
                  $(".sent-message").show(),
                  $(".php-email-form").trigger("reset"))
                : ($(".error-message").text(e.message),
                  $(".error-message").show()),
                $(".loading").hide(),
                gtag_report_conversion(window.location),
                $("#thankyou").css("display", "flex");
            },
            error: function (e, t, s) {
              $(".error-message")
                .text(
                  "There was an error sending your message. Please try again later."
                )
                .show(),
                $(".loading").hide();
            },
          }),
          !1
        );
      }),
      $("#product-carousel").owlCarousel({
        loop: !0,
        margin: 10,
        nav: !1,
        dots: !1,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplayHoverPause: !0,
        responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 5 } },
      }),
      $("#key-features").owlCarousel({
        loop: !1,
        margin: 20,
        responsive: {
          0: {
            items: 1,
            loop: !0,
            dots: !1,
            autoplay: !0,
            slideTransition: "linear",
            autoplayTimeout: 4e3,
            autoplaySpeed: 4e3,
            autoplayHoverPause: !0,
          },
          600: { items: 2 },
          1e3: { items: 4 },
        },
      }),
      $("#feature-carousel").owlCarousel({
        loop: !0,
        margin: 10,
        responsiveClass: !0,
        responsive: {
          0: { items: 1, nav: !0 },
          600: { items: 3, nav: !1 },
          1e3: { items: 3, nav: !1, loop: !1 },
        },
      }),
      $("#shiprates-carousel").owlCarousel({
        loop: !0,
        margin: 10,
        responsiveClass: !0,
        responsive: {
          0: { items: 1, nav: !0 },
          600: { items: 3, nav: !1 },
          1e3: { items: 4, nav: !1, loop: !1 },
        },
      }),
      $("#publishers").owlCarousel({
        loop: !1,
        margin: 20,
        loop: !0,
        dots: !1,
        autoplay: !0,
        slideTransition: "linear",
        autoplayTimeout: 4e3,
        autoplaySpeed: 4e3,
        autoplayHoverPause: !0,
        responsive: { 0: { items: 2 }, 600: { items: 4 }, 1e3: { items: 5 } },
      }),
      $('input[name="lookupType"]').change(function () {
        const t = $(this).val();
        localStorage.setItem("lookupType", t),
          e(t),
          $(".tracking-table").addClass("hidden");
      }),
      $(document).ready(function () {
        e($('input[name="lookupType"]:checked').val());
      }),
      $("#mobile_no").on("input", function () {
        (this.value = this.value.replace(/\D/g, "")),
          this.value.length > 10 && (this.value = this.value.slice(0, 10));
      }),
      $("#lookupForm").submit(function (e) {
        e.preventDefault();
        let t = {};
        if ("order_id" === $('input[name="lookupType"]:checked').val()) {
          let e = $("#mobile_no").val();
          if (!/^\d{10}$/.test(e))
            return void $("#responseMessage").html(
              "Please enter a valid 10-digit mobile number."
            );
          t = {
            order_id: $("#order_id").val(),
            mobile_no: e,
            csrf: $("#csrf").val(),
          };
        } else t = { awb_no: $("#awb_no").val(), csrf: $("#csrf").val() };
        $(".ship-loading").show(),
          $.ajax({
            url: "lookup.php",
            type: "POST",
            data: t,
            dataType: "json",
            success: function (e) {
              if (e.success) {
                let t = e.records,
                  s = e.records[0].shipment_details,
                  a = "",
                  n =
                    '\n                        <tr>\n                            <th class="br-1" scope="col" width="30%">Product Name</th>\n                            <th scope="col">Courier</th>\n                            <th scope="col" class="edd-column">EDD</th>\n                            <th scope="col" width="20%">Status</th>\n                            <th class="br-2 headcol" scope="col">Action</th>\n                        </tr>';
                $("#order-date").html(t[0].creation_date.split(" ")[0]),
                  $("#order-id").html(t[0].seller_order_id),
                  s.forEach(function (e) {
                    let t,
                      s,
                      n = e.product_details,
                      o = e.current_tracking_status_desc;
                    (t =
                      "Delivered" == o || "RTO Delivered" == o
                        ? "delivered"
                        : "Out for Delivery" == o || "RTO Out for Delivery" == o
                        ? "label"
                        : "Undelivered" == o || "CANCELLED" == o
                        ? "cancel"
                        : "intransit"),
                      $(".tracking-table").removeClass("hidden");
                    let r =
                      e.current_courier_edd && e.current_courier_edd.trim()
                        ? e.current_courier_edd.split(" ")[0]
                        : "N/A";
                    if (
                      (("Undelivered" === o &&
                        "RTO In Transit" === o &&
                        "RTO Out for Delivery" === o &&
                        "RTO Delivered" === o) ||
                        (eddColumn = `<td class="align-middle edd-column">${r}</td>`),
                      n.length > 1)
                    ) {
                      let r = n
                        .slice(1)
                        .map((e) => e.product_name)
                        .join(", ");
                      (s = ` (+${n.length - 1} more products)`),
                        (a += `\n                            <tr>\n                                <td class="align-middle" width="30%">${n[0].product_name} <img class="d-none" src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/info.svg"\n                                                    alt="" data-bs-toggle="tooltip" data-bs-placement="top"\n                                                    title="More Products: ${r}"> <p>${s}</p></td>\n                                <td class="align-middle">${e.courier_name}</td>\n                                 ${eddColumn}\n                                <td class="align-middle" width="20%"><span class="${t}">${o}</span></td>\n                                <td class="headcol align-middle"><button class="solid-action-btn" onClick=trackBy('${e.awb}')>Track <i class="fas fa-arrow-up"></i></button></td>\n                            </tr>`);
                    } else (s = `SKU: ${n[0].product_sku}`), (a += `\n                            <tr>\n                                <td class="align-middle" width="30%">${n[0].product_name} <img src="https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/icon/info.svg"\n                                                    alt="" data-bs-toggle="tooltip" data-bs-placement="top"\n                                                    title="${s}"></td>\n                                <td class="align-middle">${e.courier_name}</td>\n                                 ${eddColumn}\n                                <td class="align-middle" width="20%"><span class="${t}">${o}</span></td>\n                                <td class="headcol align-middle"><button class="solid-action-btn" onClick=trackBy('${e.awb}')>Track <i class="fas fa-arrow-up"></i></button></td>\n                            </tr>`);
                  }),
                  $("#trackingTable thead").html(n),
                  $("#trackingTable tbody").html(a),
                  $("#trackingTable").removeClass("hidden"),
                  $("#responseMessage").html(""),
                  s.some(
                    (e) =>
                      "Undelivered" === e.current_tracking_status_desc ||
                      "RTO In Transit" === e.current_tracking_status_desc ||
                      "RTO Out for Delivery" ===
                        e.current_tracking_status_desc ||
                      "RTO Delivered" === e.current_tracking_status_desc ||
                      "Delivered" === e.current_tracking_status_desc
                  ) && $(".edd-column").hide();
              } else
                $("#responseMessage").html("Shipment Not found....!"),
                  setTimeout(function () {
                    $("#responseMessage").hide();
                  }, 3e3),
                  $("#trackingTable").addClass("hidden");
              $("#order_id").val(""),
                $("#mobile_no").val(""),
                $("#awb_no").val(""),
                $(".ship-loading").hide();
            },
            error: function () {
              $("#responseMessage").html(
                "An error occurred. Please try again."
              );
            },
          });
      });
  }),
  $('input[name="options"]').change(function () {
    var e = $(this).attr("id");
    $(".rate-row").each(function () {
      var t = $(this).data("mode");
      "all" === e || e === t ? $(this).show() : $(this).hide();
    });
  }),
  $(document).ready(function () {
    const e = $("#pickup-pincode"),
      t = $("#delivery-pincode"),
      s = $(".rateLoader"),
      a = $("#rateResult"),
      n = $("#rateTableBody"),
      o = $("#errorMessage");
    function r(e, t, s) {
      const a = e.val().length;
      return a < t
        ? (i(e, `${l(e)} must be at least ${t} characters`), !1)
        : a > s
        ? (i(e, `${l(e)} must be less than ${s} characters`), !1)
        : ((function (e) {
            const t = e.parent();
            t.addClass("success").removeClass("error");
          })(e),
          !0);
    }
    function i(e, t) {
      const s = e.parent();
      s.addClass("error").removeClass("success"), s.find("small").text(t);
    }
    function l(e) {
      return e.attr("id").charAt(0).toUpperCase() + e.attr("id").slice(1);
    }
    e.on("keyup", function () {
      r(e, 6, 6);
    }),
      t.on("keyup", function () {
        r(t, 6, 6);
      }),
      $("#calForm").on("submit", function (l) {
        l.preventDefault();
        const d = r(e, 6, 6),
          c = r(t, 6, 6);
        if (d && c) {
          const r = new FormData(this);
          o.hide(),
            n.empty(),
            a.hide(),
            s.show(),
            $.ajax({
              url: "rates.php",
              type: "POST",
              data: r,
              contentType: !1,
              processData: !1,
              dataType: "json",
              success: function (r) {
                if ((s.hide(), "error" === r.result))
                  r.message.includes("Pincode(s) not serviceable")
                    ? "pickup" === r.invalid_pincode
                      ? i(e, "Pickup pincode not serviceable")
                      : "delivery" === r.invalid_pincode &&
                        i(t, "Delivery pincode not serviceable")
                    : o.text(r.message).show();
                else if (Array.isArray(r)) {
                  a.show();
                  let e = "";
                  r.forEach(function (t) {
                    e += `<tr class="rate-row" data-mode="${t.mode}">\n                                        <td>${t.courier}</td>\n                                        <td>${t.icon}</td>\n                                        <td>${t.weight}</td>\n                                        <td>${t.rate}</td>\n                                    </tr>`;
                  }),
                    n.html(e);
                } else
                  o.text(
                    "An unexpected error occurred. Please try again."
                  ).show();
              },
              error: function (e) {
                let t = "Failed to fetch rates. Please try again later.";
                e.responseJSON &&
                  e.responseJSON.message &&
                  (t = e.responseJSON.message),
                  o.text(t).show();
              },
            });
        }
      }),
      $("#calForm").on("reset", function () {
        a.hide(), o.hide(), $("input").parent().removeClass("error success");
      });
  }),
  $(document).ready(function () {
    $(".form-container").show(),
      $(".track-container").hide(),
      $(".lp-nav-link").on("click", function (e) {
        e.preventDefault(),
          $(".lp-nav-link").removeClass("active"),
          $(this).addClass("active");
        var t = $(this).attr("href");
        "#tabs-1" === t
          ? ($(".form-container").show(), $(".track-container").hide())
          : "#tabs-2" === t &&
            ($(".form-container").hide(), $(".track-container").show());
      });
  });
const calculateBtn = document.getElementById("calculateBtn"),
  actualWeightEl = document.querySelector(".actual-weight"),
  chargeableWeightEl = document.querySelector(".chargeable-weight"),
  inputWeightEl = document.querySelector(".input-weight"),
  volumeResultEl = document.querySelector(".volumeResult"),
  showError = (e, t) => {
    e.classList.add("input-error");
    let s = e.parentElement.querySelector(".error-message");
    s ||
      ((s = document.createElement("div")),
      (s.className = "error-message"),
      e.parentElement.appendChild(s)),
      (s.textContent = t);
  },
  showSuccess = (e) => {
    e.classList.remove("input-error");
    const t = e.parentElement.querySelector(".error-message");
    t && e.parentElement.removeChild(t);
  },
  calculateWeight = () => {
    let e = 0,
      t = !0;
    if (
      (document.querySelectorAll(".parcel").forEach((s) => {
        const a = s.querySelector(".length"),
          n = s.querySelector(".width"),
          o = s.querySelector(".height"),
          r = parseFloat(a?.value),
          i = parseFloat(n?.value),
          l = parseFloat(o?.value);
        if (r > 0 && i > 0 && l > 0)
          (e += (r * i * l) / 5e3),
            showSuccess(a),
            showSuccess(n),
            showSuccess(o);
        else {
          [a, n, o].forEach((e) => {
            e?.classList.add("input-error");
          });
          const e =
            s.querySelector(".error-message") || document.createElement("div");
          (e.className = "error-message"),
            (e.textContent = "Please fill in all dimensions correctly."),
            s.contains(e) || s.appendChild(e),
            (t = !1);
        }
      }),
      !t)
    )
      return void (volumeResultEl.style.display = "none");
    actualWeightEl.textContent = `${e.toFixed(1)} KG`;
    const s = parseFloat(inputWeightEl?.value);
    if (!s || s <= 0)
      return (
        showError(inputWeightEl, "Please enter a valid weight"),
        void (volumeResultEl.style.display = "none")
      );
    showSuccess(inputWeightEl);
    const a = parseFloat(actualWeightEl.textContent),
      n = Math.max(a, s);
    (chargeableWeightEl.textContent = `${n.toFixed(1)} KG`),
      (volumeResultEl.style.display = "flex");
  };
function timeAgo(e) {
  const t = new Date(e),
    s = new Date(),
    a = Math.floor((s - t) / 1e3),
    n = Math.floor(a / 86400);
  return n < 1 ? "Today" : 1 === n ? "1 day ago" : `${n} days ago`;
}
calculateBtn?.addEventListener("click", calculateWeight),
  fetch("https://rapidshyp.com/blog/wp-json/wp/v2/posts?_embed&per_page=10")
    .then((e) => e.json())
    .then((e) => {
      const t = document.getElementById("blog-posts");
      e.forEach((e) => {
        const s = e.title.rendered || "Untitled",
          a =
            (e.excerpt.rendered.replace(/<[^>]+>/g, "").slice(0, 120), e.link),
          n =
            e._embedded?.["wp:featuredmedia"]?.[0]?.source_url ||
            "https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/post1.png",
          o = timeAgo(e.date),
          r = e._embedded?.author?.[0]?.name || "Admin",
          i = `\n        <div class="item">\n          <div class="card blog-post">\n            <div class="head">\n              <a href="${a}"><img src="${n}" alt="${s}"></a>\n            </div>\n            <div class="body">\n              <div class="d-flex justify-content-between align-items-center">\n                <span class="label">${
            e._embedded?.["wp:term"]?.[0]?.[0]?.name || "General"
          }</span>\n                <span class="time">${o} by <b>${r}</b></span>\n              </div>\n              <a href="${a}"><p class="content">${s}</p></a>\n            </div>\n            <div class="footer">\n              <a href="${a}">Read More <i class="fas fa-arrow-right"></i></a>\n            </div>\n          </div>\n        </div>\n        `;
        t.innerHTML += i;
      }),
        $("#blog-posts").owlCarousel({
          loop: !0,
          margin: 20,
          autoplay: !0,
          autoplayTimeout: 3e3,
          autoplayHoverPause: !0,
          nav: !1,
          navText: [
            '<i class="fas fa-chevron-left fa-2x"></i>',
            '<i class="fas fa-chevron-right fa-2x"></i>',
          ],
          dots: !0,
          responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 3 } },
        });
    })
    .catch((e) => {
      console.error("Failed to load blog posts:", e),
        (document.getElementById("blog-posts").innerHTML =
          "<p>Error loading blog posts.</p>");
    }),
  document.getElementById("viewMoreBtn").addEventListener("click", function () {
    const e = document.querySelectorAll(".hidden-column");
    console.log("hiddenColumns", e);
    const t = "none" === e[0].style.display || "" === e[0].style.display;
    console.log("isHidden", t),
      e.forEach((e) => {
        e.style.display = t ? "block" : "none";
      }),
      (this.textContent = t ? "View Less" : "View More");
  });
