/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ChatbotComponent.js"
/*!*****************************************!*\
  !*** ./src/scripts/ChatbotComponent.js ***!
  \*****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const PHONE_DISPLAY = "(909) 232-6602";
const PHONE_LINK = "tel:+19092326602";
const EMAIL_DISPLAY = "[client email]";
const EMAIL_LINK = "mailto:[client email]";
const ESTIMATE_LINK = "/contact-us";
const ABOUT_LINK = "/about-us";
const GALLERY_LINK = "/gallery";
const LOCATIONS_LINK = "/locations";
function BotIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "9.25",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "14.75",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    })]
  });
}
function CloseIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6 6L18 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18 6L6 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    })]
  });
}
function SendIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L10 14",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L14 21L10 14L3 10L21 3Z",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function PhoneIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}
function ExternalLinkIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M14 5H19V10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M10 14L19 5",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function createBotMessage(text, links = []) {
  return {
    id: Date.now() + Math.random(),
    text,
    sender: "bot",
    timestamp: new Date(),
    links
  };
}
function getBotResponse(rawInput) {
  const input = rawInput.toLowerCase();
  if (input.includes("interior") || input.includes("interior painting") || input.includes("inside") || input.includes("paint inside")) {
    return createBotMessage("Interior painting is where trust begins. Real Painting Corp handles walls, ceilings, trim, and accent work with full surface preparation, furniture protection, daily cleanup, and a final walk-through before payment.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "About Us",
      href: ABOUT_LINK
    }]);
  }
  if (input.includes("exterior") || input.includes("outside") || input.includes("outside painting") || input.includes("exterior painting")) {
    return createBotMessage("Exterior painting is about protection as much as appearance. Real Painting Corp handles pressure washing, prep, repairs, caulking, priming, and premium exterior-grade coatings engineered for Southern California’s climate.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "View Our Work",
      href: GALLERY_LINK
    }]);
  }
  if (input.includes("kitchen") || input.includes("kitchen remodel") || input.includes("remodel kitchen")) {
    return createBotMessage("Kitchen remodeling is the project that changes how your family lives. We handle demolition, layout planning, cabinets, countertops, tile, painting, finishing, and daily cleanup with a clear timeline and no surprises.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }
  if (input.includes("bathroom") || input.includes("bath remodel") || input.includes("bathroom remodel") || input.includes("shower")) {
    return createBotMessage("Bathroom remodeling is one of the highest-impact upgrades you can make. We handle demolition, shower conversions, tile, vanities, painting, finishing, and home protection with clean execution from start to finish.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }
  if (input.includes("cabinet") || input.includes("refinishing") || input.includes("staining")) {
    return createBotMessage("Cabinet refinishing and staining gives you a dramatic kitchen transformation without the cost of full replacement. We handle the full prep and finish process so the space feels new again.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("surface") || input.includes("repair") || input.includes("prep") || input.includes("preparation") || input.includes("drywall") || input.includes("stucco") || input.includes("texture") || input.includes("popcorn ceiling")) {
    return createBotMessage("Surface repair and preparation is the work behind the work. Real Painting Corp handles drywall repair, stucco patching, texture work, acoustic ceiling removal, trim, doors, windows, and other prep that makes a finish last.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("pressure washing") || input.includes("pressure wash") || input.includes("washing") || input.includes("driveway") || input.includes("patio")) {
    return createBotMessage("Pressure washing restores appearance and prepares surfaces for what comes next. We clean driveways, patios, walkways, fences, stucco, and pre-paint exterior surfaces.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("commercial") || input.includes("office") || input.includes("retail") || input.includes("medical")) {
    return createBotMessage("Real Painting Corp also provides selective commercial painting for offices, retail, medical, and multi-use spaces — executed on schedule and with minimal disruption to operations.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }
  if (input.includes("estimate") || input.includes("quote") || input.includes("consultation") || input.includes("free estimate")) {
    return createBotMessage("You can request a free estimate through the contact page. Real Painting Corp aims to respond within 24–48 hours and provide a clear written proposal with scope, timeline, and pricing.", [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("licensed") || input.includes("insured") || input.includes("bonded") || input.includes("license") || input.includes("insurance")) {
    return createBotMessage("Yes — Real Painting Corp is C-33 licensed, insured, and bonded. The company also carries General Liability and Workers’ Compensation coverage so your home and investment are protected.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }
  if (input.includes("areas") || input.includes("service area") || input.includes("location") || input.includes("locations") || input.includes("orange county") || input.includes("los angeles") || input.includes("riverside") || input.includes("san bernardino")) {
    return createBotMessage("Real Painting Corp serves Orange County, Los Angeles County, Riverside County, and San Bernardino County. If you want, you can explore the locations section or contact the team directly about your city.", [{
      label: "View Locations",
      href: LOCATIONS_LINK
    }, {
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("contact") || input.includes("phone") || input.includes("email")) {
    return createBotMessage("You can reach Real Painting Corp by phone, or submit a request through the contact page. The site copy still shows the client email as pending confirmation, so phone or the estimate form is the safest path right now.", [{
      label: PHONE_DISPLAY,
      href: PHONE_LINK
    }, {
      label: "Contact Us",
      href: ESTIMATE_LINK
    }]);
  }
  if (input.includes("gallery") || input.includes("projects") || input.includes("work")) {
    return createBotMessage("You can explore the gallery to see real projects and real results. That’s the best place to preview the quality, finish level, and overall presentation style of the work.", [{
      label: "View Our Work",
      href: GALLERY_LINK
    }]);
  }
  return createBotMessage("Hi — I can help with interior painting, exterior painting, kitchen remodeling, bathroom remodeling, cabinet refinishing, surface repair, pressure washing, commercial painting, service areas, licensing, and free estimates.", [{
    label: "Request a Free Estimate",
    href: ESTIMATE_LINK
  }, {
    label: "Call Now",
    href: PHONE_LINK
  }]);
}
function RealPaintingChatbot() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([{
    id: 1,
    text: "Hi, I’m the Real Painting Corp assistant. I can help with painting, remodeling, service areas, licensing, and requesting a free estimate.",
    sender: "bot",
    timestamp: new Date(),
    links: [{
      label: "Request a Free Estimate",
      href: ESTIMATE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]
  }]);
  const messagesEndRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const quickActions = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => [{
    text: "Interior Painting",
    icon: "🎨"
  }, {
    text: "Exterior Painting",
    icon: "🏡"
  }, {
    text: "Kitchen Remodeling",
    icon: "🍽️"
  }, {
    text: "Bathroom Remodeling",
    icon: "🛁"
  }, {
    text: "Cabinet Refinishing",
    icon: "🪵"
  }, {
    text: "Free Estimate",
    icon: "📋"
  }], []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    messagesEndRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  }, [messages, isTyping]);
  function handleSendMessage(e) {
    e?.preventDefault?.();
    if (!inputMessage.trim()) return;
    const currentMessage = inputMessage.trim();
    const userMessage = {
      id: Date.now(),
      text: currentMessage,
      sender: "user",
      timestamp: new Date()
    };
    setMessages(prev => [...prev, userMessage]);
    setInputMessage("");
    setIsTyping(true);
    setTimeout(() => {
      const botResponse = getBotResponse(currentMessage);
      setMessages(prev => [...prev, botResponse]);
      setIsTyping(false);
    }, 700);
  }
  function handleQuickAction(action) {
    setInputMessage(action);
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5",
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] border border-[#192F44]/10 bg-[#fdfcf8] shadow-[0_22px_50px_rgba(25,47,68,0.16)] sm:h-[33rem]",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "relative overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#192F44_0%,#236476_52%,#7DAD3F_140%)] px-4 py-3 text-white",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "absolute inset-0 opacity-[0.08] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:18px_18px]"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "relative flex items-start justify-between gap-3",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-white/10 backdrop-blur-sm",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
                className: "h-5 w-5"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[11px] font-black uppercase tracking-[0.18em] text-[#CFE0DA]",
                children: "Be Real. Build Real."
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "mt-1 text-[0.92rem] font-black tracking-[-0.02em]",
                style: {
                  fontFamily: '"Space Grotesk", "Segoe UI", Arial, sans-serif'
                },
                children: "Real Painting Assistant"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "mt-0.5 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75",
                children: "Online now"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            onClick: () => setIsOpen(false),
            className: "inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/15 bg-white/10 text-white transition hover:bg-white hover:text-[#192F44]",
            "aria-label": "Close chat",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
              className: "h-4 w-4"
            })
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "flex-1 overflow-y-auto bg-[#f6f5f0] px-3 py-3",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "space-y-3",
          children: [messages.map(message => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `flex ${message.sender === "user" ? "justify-end" : "justify-start"}`,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: `max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.9rem] leading-6 shadow-sm ${message.sender === "user" ? "rounded-br-md bg-[#192F44] text-white" : "rounded-bl-md border border-[#192F44]/10 bg-white text-[#192F44]"}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "m-0",
                children: message.text
              }), message.links?.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "mt-3 flex flex-wrap gap-2",
                children: message.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: link.href,
                  className: "inline-flex items-center gap-1.5 rounded-full border border-[#192F44]/10 bg-[#f6f5f0] px-2.5 py-1.5 text-[11px] font-black text-[#236476] transition hover:border-[#7DAD3F] hover:text-[#4A6C2F]",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ExternalLinkIcon, {
                    className: "h-3.5 w-3.5"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: link.label
                  })]
                }, `${message.id}-${link.href}-${link.label}`))
              })]
            })
          }, message.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex justify-start",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rounded-[18px] rounded-bl-md border border-[#192F44]/10 bg-white px-4 py-3 shadow-sm",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "flex gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[#236476]"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[#7DAD3F]",
                  style: {
                    animationDelay: "0.2s"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[#4A6C2F]",
                  style: {
                    animationDelay: "0.4s"
                  }
                })]
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            ref: messagesEndRef
          })]
        })
      }), messages.length === 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[#192F44]/10 bg-white px-3 py-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em] text-[#236476]",
          children: "Quick help"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-wrap gap-2",
          children: quickActions.map(action => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            type: "button",
            onClick: () => handleQuickAction(action.text),
            className: "rounded-full border border-[#192F44]/10 bg-[#f6f5f0] px-2.5 py-1.5 text-[11px] font-black text-[#192F44] transition hover:border-[#7DAD3F] hover:bg-[#CFE0DA]/35 hover:text-[#4A6C2F]",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "mr-1",
              children: action.icon
            }), action.text]
          }, action.text))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[#192F44]/10 bg-white p-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
          onSubmit: handleSendMessage,
          className: "flex items-center gap-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            placeholder: "Ask about painting, remodeling...",
            className: "min-w-0 flex-1 rounded-full border border-[#192F44]/12 bg-[#f6f5f0] px-4 py-2.5 text-sm text-[#192F44] outline-none transition placeholder:text-[#192F44]/45 focus:border-[#236476] focus:bg-white focus:ring-4 focus:ring-[#CFE0DA]/50"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: !inputMessage.trim(),
            className: "inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#7DAD3F] text-white shadow-[0_14px_30px_rgba(125,173,63,0.28)] transition hover:scale-[1.03] hover:bg-[#4A6C2F] disabled:cursor-not-allowed disabled:opacity-50",
            "aria-label": "Send message",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {
              className: "h-4 w-4"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold text-[#192F44]/65",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_LINK,
            className: "inline-flex items-center gap-1.5 transition hover:text-[#236476]",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              className: "h-3.5 w-3.5"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: PHONE_DISPLAY
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: EMAIL_LINK,
            className: "truncate transition hover:text-[#236476]",
            children: EMAIL_DISPLAY
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "button",
      onClick: () => setIsOpen(prev => !prev),
      className: `group relative flex h-14 w-14 items-center justify-center rounded-full text-white shadow-[0_18px_40px_rgba(25,47,68,0.24)] transition-all duration-300 hover:scale-[1.04] ${isOpen ? "bg-[#192F44]" : "bg-[linear-gradient(135deg,#192F44_0%,#236476_58%,#7DAD3F_140%)]"}`,
      "aria-label": isOpen ? "Close chat" : "Open chat",
      children: [!isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "absolute inline-flex h-full w-full animate-ping rounded-full bg-[#7DAD3F] opacity-75"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "relative inline-flex h-3.5 w-3.5 rounded-full bg-[#7DAD3F]"
        })]
      }), isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
        className: "h-5.5 w-5.5"
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
        className: "h-6 w-6"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (RealPaintingChatbot);

/***/ },

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initNavbar)
/* harmony export */ });
function initNavbar() {
  const body = document.body;
  const header = document.querySelector(".js-rpc-header");
  const navToggle = document.querySelector(".js-rpc-nav-toggle");
  const mobilePanel = document.querySelector(".js-rpc-mobile-panel");
  const desktopDropdowns = document.querySelectorAll(".js-rpc-dropdown");
  const desktopDropdownToggles = document.querySelectorAll(".js-rpc-dropdown-toggle");
  const mobileGroups = document.querySelectorAll(".js-rpc-mobile-group");
  const mobileGroupToggles = document.querySelectorAll(".js-rpc-mobile-group-toggle");
  if (!header) return;
  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach(item => {
      item.classList.remove("is-open");
      const toggle = item.querySelector(".js-rpc-dropdown-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileGroups = () => {
    mobileGroups.forEach(group => {
      group.classList.remove("is-open");
      const toggle = group.querySelector(".js-rpc-mobile-group-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.setAttribute("hidden", "");
    navToggle.setAttribute("aria-expanded", "false");
    body.classList.remove("rpc-mobile-open");
    closeMobileGroups();
  };
  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.removeAttribute("hidden");
    navToggle.setAttribute("aria-expanded", "true");
    body.classList.add("rpc-mobile-open");
  };
  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  };
  const handleHeaderState = () => {
    if (window.scrollY > 16) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };
  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu);
  }
  desktopDropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault();
      const parent = toggle.closest(".js-rpc-dropdown");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeDesktopDropdowns();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  mobileGroupToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-rpc-mobile-group");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeMobileGroups();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  document.addEventListener("click", event => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-rpc-dropdown");
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns();
    }
    const clickedInsideMobilePanel = event.target.closest(".js-rpc-mobile-panel");
    const clickedToggle = event.target.closest(".js-rpc-nav-toggle");
    if (mobilePanel && navToggle && !mobilePanel.hasAttribute("hidden") && !clickedInsideMobilePanel && !clickedToggle) {
      closeMobileMenu();
    }
  });
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") {
      closeDesktopDropdowns();
      closeMobileMenu();
    }
  });
  handleHeaderState();
  window.addEventListener("scroll", handleHeaderState);
  window.addEventListener("resize", () => {
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });
}

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");
/* harmony import */ var _scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/ChatbotComponent */ "./src/scripts/ChatbotComponent.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);







const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_2__["default"]("Brad");
void person1;
function initializeComponents() {
  const reactExampleContainer = document.getElementById("render-react-example-here");
  if (reactExampleContainer) {
    try {
      const exampleRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(reactExampleContainer);
      exampleRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
      console.log("✅ ExampleReactComponent renderizado correctamente");
    } catch (error) {
      console.error("❌ Error renderizando ExampleReactComponent:", error);
    }
  }
  try {
    (0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_4__["default"])();
    console.log("✅ Navbar inicializado correctamente");
  } catch (error) {
    console.error("❌ Error inicializando navbar:", error);
  }
  let chatbotContainer = document.getElementById("ajs-chatbot");
  if (!chatbotContainer) {
    chatbotContainer = document.createElement("div");
    chatbotContainer.id = "ajs-chatbot";
    document.body.appendChild(chatbotContainer);
  }
  if (chatbotContainer) {
    try {
      const chatbotRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(chatbotContainer);
      chatbotRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_5__["default"], {}));
      console.log("✅ Chatbot renderizado correctamente");
    } catch (error) {
      console.error("❌ Error renderizando Chatbot:", error);
    }
  }
}
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initializeComponents);
} else {
  initializeComponents();
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map