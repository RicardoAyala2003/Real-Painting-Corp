import React from "react"
import { createRoot } from "react-dom/client"
import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import initNavbar from "./scripts/navbar"
import AJSChatbot from "./scripts/ChatbotComponent"

const person1 = new Person("Brad")
void person1

function initializeComponents() {
	const reactExampleContainer = document.getElementById("render-react-example-here")

	if (reactExampleContainer) {
		try {
			const exampleRoot = createRoot(reactExampleContainer)
			exampleRoot.render(<ExampleReactComponent />)
			console.log("✅ ExampleReactComponent renderizado correctamente")
		} catch (error) {
			console.error("❌ Error renderizando ExampleReactComponent:", error)
		}
	}

	try {
		initNavbar()
		console.log("✅ Navbar inicializado correctamente")
	} catch (error) {
		console.error("❌ Error inicializando navbar:", error)
	}

	let chatbotContainer = document.getElementById("ajs-chatbot")

	if (!chatbotContainer) {
		chatbotContainer = document.createElement("div")
		chatbotContainer.id = "ajs-chatbot"
		document.body.appendChild(chatbotContainer)
	}

	if (chatbotContainer) {
		try {
			const chatbotRoot = createRoot(chatbotContainer)
			chatbotRoot.render(<AJSChatbot />)
			console.log("✅ Chatbot renderizado correctamente")
		} catch (error) {
			console.error("❌ Error renderizando Chatbot:", error)
		}
	}
}

if (document.readyState === "loading") {
	document.addEventListener("DOMContentLoaded", initializeComponents)
} else {
	initializeComponents()
}