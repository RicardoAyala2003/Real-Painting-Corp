import React, { useEffect, useMemo, useRef, useState } from "react"

const PHONE_DISPLAY = "(909) 513-7397"
const PHONE_LINK = "tel:+19095137397"
const EMAIL_DISPLAY = "info@realpaintingus.com"
const EMAIL_LINK = "mailto:info@realpaintingus.com"
const ESTIMATE_LINK = "/contact-us"
const ABOUT_LINK = "/about-us"
const GALLERY_LINK = "/gallery"
const LOCATIONS_LINK = "/locations"

function BotIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<circle cx="9.25" cy="10.25" r="1" fill="currentColor" />
			<circle cx="14.75" cy="10.25" r="1" fill="currentColor" />
		</svg>
	)
}

function CloseIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M6 6L18 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
			<path d="M18 6L6 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
		</svg>
	)
}

function SendIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M21 3L10 14"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M21 3L14 21L10 14L3 10L21 3Z"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function PhoneIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function ExternalLinkIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M14 5H19V10"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M10 14L19 5"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function createBotMessage(text, links = []) {
	return {
		id: Date.now() + Math.random(),
		text,
		sender: "bot",
		timestamp: new Date(),
		links
	}
}

function getBotResponse(rawInput) {
	const input = rawInput.toLowerCase()

	if (
		input.includes("interior") ||
		input.includes("interior painting") ||
		input.includes("inside") ||
		input.includes("paint inside")
	) {
		return createBotMessage(
			"Interior painting is where trust begins. Real Painting Corp handles walls, ceilings, trim, and accent work with full surface preparation, furniture protection, daily cleanup, and a final walk-through before payment.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "About Us", href: ABOUT_LINK }
			]
		)
	}

	if (
		input.includes("exterior") ||
		input.includes("outside") ||
		input.includes("outside painting") ||
		input.includes("exterior painting")
	) {
		return createBotMessage(
			"Exterior painting is about protection as much as appearance. Real Painting Corp handles pressure washing, prep, repairs, caulking, priming, and premium exterior-grade coatings engineered for Southern California’s climate.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "View Our Work", href: GALLERY_LINK }
			]
		)
	}

	if (
		input.includes("kitchen") ||
		input.includes("kitchen remodel") ||
		input.includes("remodel kitchen")
	) {
		return createBotMessage(
			"Kitchen remodeling is the project that changes how your family lives. We handle demolition, layout planning, cabinets, countertops, tile, painting, finishing, and daily cleanup with a clear timeline and no surprises.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		)
	}

	if (
		input.includes("bathroom") ||
		input.includes("bath remodel") ||
		input.includes("bathroom remodel") ||
		input.includes("shower")
	) {
		return createBotMessage(
			"Bathroom remodeling is one of the highest-impact upgrades you can make. We handle demolition, shower conversions, tile, vanities, painting, finishing, and home protection with clean execution from start to finish.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		)
	}

	if (
		input.includes("cabinet") ||
		input.includes("refinishing") ||
		input.includes("staining")
	) {
		return createBotMessage(
			"Cabinet refinishing and staining gives you a dramatic kitchen transformation without the cost of full replacement. We handle the full prep and finish process so the space feels new again.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("surface") ||
		input.includes("repair") ||
		input.includes("prep") ||
		input.includes("preparation") ||
		input.includes("drywall") ||
		input.includes("stucco") ||
		input.includes("texture") ||
		input.includes("popcorn ceiling")
	) {
		return createBotMessage(
			"Surface repair and preparation is the work behind the work. Real Painting Corp handles drywall repair, stucco patching, texture work, acoustic ceiling removal, trim, doors, windows, and other prep that makes a finish last.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("pressure washing") ||
		input.includes("pressure wash") ||
		input.includes("washing") ||
		input.includes("driveway") ||
		input.includes("patio")
	) {
		return createBotMessage(
			"Pressure washing restores appearance and prepares surfaces for what comes next. We clean driveways, patios, walkways, fences, stucco, and pre-paint exterior surfaces.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("commercial") ||
		input.includes("office") ||
		input.includes("retail") ||
		input.includes("medical")
	) {
		return createBotMessage(
			"Real Painting Corp also provides selective commercial painting for offices, retail, medical, and multi-use spaces — executed on schedule and with minimal disruption to operations.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		)
	}

	if (
		input.includes("estimate") ||
		input.includes("quote") ||
		input.includes("consultation") ||
		input.includes("free estimate")
	) {
		return createBotMessage(
			"You can request a free estimate through the contact page. Real Painting Corp aims to respond within 24–48 hours and provide a clear written proposal with scope, timeline, and pricing.",
			[
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("licensed") ||
		input.includes("insured") ||
		input.includes("bonded") ||
		input.includes("license") ||
		input.includes("insurance")
	) {
		return createBotMessage(
			"Yes — Real Painting Corp is C-33 licensed, insured, and bonded. The company also carries General Liability and Workers’ Compensation coverage so your home and investment are protected.",
			[
				{ label: "About Us", href: ABOUT_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		)
	}

	if (
		input.includes("areas") ||
		input.includes("service area") ||
		input.includes("location") ||
		input.includes("locations") ||
		input.includes("orange county") ||
		input.includes("los angeles") ||
		input.includes("riverside") ||
		input.includes("san bernardino")
	) {
		return createBotMessage(
			"Real Painting Corp serves Orange County, Los Angeles County, Riverside County, and San Bernardino County. If you want, you can explore the locations section or contact the team directly about your city.",
			[
				{ label: "View Locations", href: LOCATIONS_LINK },
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("contact") ||
		input.includes("phone") ||
		input.includes("email")
	) {
		return createBotMessage(
			"You can reach Real Painting Corp by phone, or submit a request through the contact page. The site copy still shows the client email as pending confirmation, so phone or the estimate form is the safest path right now.",
			[
				{ label: PHONE_DISPLAY, href: PHONE_LINK },
				{ label: "Contact Us", href: ESTIMATE_LINK }
			]
		)
	}

	if (
		input.includes("gallery") ||
		input.includes("projects") ||
		input.includes("work")
	) {
		return createBotMessage(
			"You can explore the gallery to see real projects and real results. That’s the best place to preview the quality, finish level, and overall presentation style of the work.",
			[
				{ label: "View Our Work", href: GALLERY_LINK }
			]
		)
	}

	return createBotMessage(
		"Hi — I can help with interior painting, exterior painting, kitchen remodeling, bathroom remodeling, cabinet refinishing, surface repair, pressure washing, commercial painting, service areas, licensing, and free estimates.",
		[
			{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
			{ label: "Call Now", href: PHONE_LINK }
		]
	)
}

function RealPaintingChatbot() {
	const [isOpen, setIsOpen] = useState(false)
	const [inputMessage, setInputMessage] = useState("")
	const [isTyping, setIsTyping] = useState(false)
	const [messages, setMessages] = useState([
		{
			id: 1,
			text: "Hi, I’m the Real Painting Corp assistant. I can help with painting, remodeling, service areas, licensing, and requesting a free estimate.",
			sender: "bot",
			timestamp: new Date(),
			links: [
				{ label: "Request a Free Estimate", href: ESTIMATE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		}
	])

	const messagesEndRef = useRef(null)

	const quickActions = useMemo(
		() => [
			{ text: "Interior Painting", icon: "🎨" },
			{ text: "Exterior Painting", icon: "🏡" },
			{ text: "Kitchen Remodeling", icon: "🍽️" },
			{ text: "Bathroom Remodeling", icon: "🛁" },
			{ text: "Cabinet Refinishing", icon: "🪵" },
			{ text: "Free Estimate", icon: "📋" }
		],
		[]
	)

	useEffect(() => {
		messagesEndRef.current?.scrollIntoView({ behavior: "smooth" })
	}, [messages, isTyping])

	function handleSendMessage(e) {
		e?.preventDefault?.()
		if (!inputMessage.trim()) return

		const currentMessage = inputMessage.trim()

		const userMessage = {
			id: Date.now(),
			text: currentMessage,
			sender: "user",
			timestamp: new Date()
		}

		setMessages(prev => [...prev, userMessage])
		setInputMessage("")
		setIsTyping(true)

		setTimeout(() => {
			const botResponse = getBotResponse(currentMessage)
			setMessages(prev => [...prev, botResponse])
			setIsTyping(false)
		}, 700)
	}

	function handleQuickAction(action) {
		setInputMessage(action)
	}

	return (
		<div className="fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5">
			{isOpen && (
				<div className="mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] border border-[#192F44]/10 bg-[#fdfcf8] shadow-[0_22px_50px_rgba(25,47,68,0.16)] sm:h-[33rem]">
					<div className="relative overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,#192F44_0%,#236476_52%,#7DAD3F_140%)] px-4 py-3 text-white">
						<div className="absolute inset-0 opacity-[0.08] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:18px_18px]"></div>

						<div className="relative flex items-start justify-between gap-3">
							<div className="flex items-center gap-3">
								<div className="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-white/10 backdrop-blur-sm">
									<BotIcon className="h-5 w-5" />
								</div>

								<div>
									<p className="text-[11px] font-black uppercase tracking-[0.18em] text-[#CFE0DA]">
										Clean Process. Clean Results.
									</p>
									<h3
										className="mt-1 text-[0.92rem] font-black tracking-[-0.02em]"
										style={{ fontFamily: '"Space Grotesk", "Segoe UI", Arial, sans-serif' }}
									>
										Real Painting Assistant
									</h3>
									<p className="mt-0.5 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">
										Online now
									</p>
								</div>
							</div>

							<button
								type="button"
								onClick={() => setIsOpen(false)}
								className="inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/15 bg-white/10 text-white transition hover:bg-white hover:text-[#192F44]"
								aria-label="Close chat"
							>
								<CloseIcon className="h-4 w-4" />
							</button>
						</div>
					</div>

					<div className="flex-1 overflow-y-auto bg-[#f6f5f0] px-3 py-3">
						<div className="space-y-3">
							{messages.map(message => (
								<div
									key={message.id}
									className={`flex ${message.sender === "user" ? "justify-end" : "justify-start"}`}
								>
									<div
										className={`max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.9rem] leading-6 shadow-sm ${
											message.sender === "user"
												? "rounded-br-md bg-[#192F44] text-white"
												: "rounded-bl-md border border-[#192F44]/10 bg-white text-[#192F44]"
										}`}
									>
										<p className="m-0">{message.text}</p>

										{message.links?.length > 0 && (
											<div className="mt-3 flex flex-wrap gap-2">
												{message.links.map(link => (
													<a
														key={`${message.id}-${link.href}-${link.label}`}
														href={link.href}
														className="inline-flex items-center gap-1.5 rounded-full border border-[#192F44]/10 bg-[#f6f5f0] px-2.5 py-1.5 text-[11px] font-black text-[#236476] transition hover:border-[#7DAD3F] hover:text-[#4A6C2F]"
													>
														<ExternalLinkIcon className="h-3.5 w-3.5" />
														<span>{link.label}</span>
													</a>
												))}
											</div>
										)}
									</div>
								</div>
							))}

							{isTyping && (
								<div className="flex justify-start">
									<div className="rounded-[18px] rounded-bl-md border border-[#192F44]/10 bg-white px-4 py-3 shadow-sm">
										<div className="flex gap-1.5">
											<span className="h-2.5 w-2.5 animate-pulse rounded-full bg-[#236476]" />
											<span
												className="h-2.5 w-2.5 animate-pulse rounded-full bg-[#7DAD3F]"
												style={{ animationDelay: "0.2s" }}
											/>
											<span
												className="h-2.5 w-2.5 animate-pulse rounded-full bg-[#4A6C2F]"
												style={{ animationDelay: "0.4s" }}
											/>
										</div>
									</div>
								</div>
							)}

							<div ref={messagesEndRef} />
						</div>
					</div>

					{messages.length === 1 && (
						<div className="border-t border-[#192F44]/10 bg-white px-3 py-3">
							<p className="mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em] text-[#236476]">
								Quick help
							</p>

							<div className="flex flex-wrap gap-2">
								{quickActions.map(action => (
									<button
										key={action.text}
										type="button"
										onClick={() => handleQuickAction(action.text)}
										className="rounded-full border border-[#192F44]/10 bg-[#f6f5f0] px-2.5 py-1.5 text-[11px] font-black text-[#192F44] transition hover:border-[#7DAD3F] hover:bg-[#CFE0DA]/35 hover:text-[#4A6C2F]"
									>
										<span className="mr-1">{action.icon}</span>
										{action.text}
									</button>
								))}
							</div>
						</div>
					)}

					<div className="border-t border-[#192F44]/10 bg-white p-3">
						<form onSubmit={handleSendMessage} className="flex items-center gap-2">
							<input
								type="text"
								value={inputMessage}
								onChange={e => setInputMessage(e.target.value)}
								placeholder="Ask about painting, remodeling..."
								className="min-w-0 flex-1 rounded-full border border-[#192F44]/12 bg-[#f6f5f0] px-4 py-2.5 text-sm text-[#192F44] outline-none transition placeholder:text-[#192F44]/45 focus:border-[#236476] focus:bg-white focus:ring-4 focus:ring-[#CFE0DA]/50"
							/>

							<button
								type="submit"
								disabled={!inputMessage.trim()}
								className="inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[#7DAD3F] text-white shadow-[0_14px_30px_rgba(125,173,63,0.28)] transition hover:scale-[1.03] hover:bg-[#4A6C2F] disabled:cursor-not-allowed disabled:opacity-50"
								aria-label="Send message"
							>
								<SendIcon className="h-4 w-4" />
							</button>
						</form>

						<div className="mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold text-[#192F44]/65">
							<a
								href={PHONE_LINK}
								className="inline-flex items-center gap-1.5 transition hover:text-[#236476]"
							>
								<PhoneIcon className="h-3.5 w-3.5" />
								<span>{PHONE_DISPLAY}</span>
							</a>

							<a
								href={EMAIL_LINK}
								className="truncate transition hover:text-[#236476]"
							>
								{EMAIL_DISPLAY}
							</a>
						</div>
					</div>
				</div>
			)}

			<button
				type="button"
				onClick={() => setIsOpen(prev => !prev)}
				className={`group relative flex h-14 w-14 items-center justify-center rounded-full text-white shadow-[0_18px_40px_rgba(25,47,68,0.24)] transition-all duration-300 hover:scale-[1.04] ${
					isOpen
						? "bg-[#192F44]"
						: "bg-[linear-gradient(135deg,#192F44_0%,#236476_58%,#7DAD3F_140%)]"
				}`}
				aria-label={isOpen ? "Close chat" : "Open chat"}
			>
				{!isOpen && (
					<span className="absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5">
						<span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-[#7DAD3F] opacity-75" />
						<span className="relative inline-flex h-3.5 w-3.5 rounded-full bg-[#7DAD3F]" />
					</span>
				)}

				{isOpen ? (
					<CloseIcon className="h-5.5 w-5.5" />
				) : (
					<BotIcon className="h-6 w-6" />
				)}
			</button>
		</div>
	)
}

export default RealPaintingChatbot