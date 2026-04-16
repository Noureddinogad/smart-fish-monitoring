# 🐟 Smart Fish Quality & Cold Chain Monitoring System

> An IoT-based solution for real-time fish quality assessment and 
> cold chain monitoring, built for the Agadir Souss-Massa fishing industry.

![Status](https://img.shields.io/badge/Status-In%20Development-yellow)
![Platform](https://img.shields.io/badge/Platform-ESP32-blue)
![Sector](https://img.shields.io/badge/Sector-Halieutique-green)
![Region](https://img.shields.io/badge/Region-Agadir%20Souss--Massa-orange)

---

## 📌 Overview

A compact IoT device based on ESP32 that monitors fish quality 
at the port of Agadir and tracks cold chain conditions during 
transport, combining environmental sensors, computer vision, 
and AI to generate traceability certificates for exporters.

---

## 🎯 Problem

- No standardized real-time quality checks at Agadir port
- Unmonitored temperature breaks during fish transport
- No digital traceability for EU export compliance
- Millions of MAD lost annually to spoilage

---

## 💡 Solution

| Module | Description |
|--------|-------------|
| **ESP32 Device** | Reads temperature, humidity & gas sensors |
| **AI Model** | Grades fish freshness from sensor data + images |
| **Web Dashboard** | Real-time monitoring for port managers & exporters |
| **Mobile App** | Driver alerts for cold chain breaches |
| **PDF Certificate** | Auto-generated traceability report per batch |

---

## 🔬 Hardware (Simulated on Wokwi)

| Component | Purpose |
|-----------|---------|
| ESP32 DevKit | Main microcontroller |
| DHT22 | Temperature & humidity |
| Potentiometer | Gas level simulation (MQ-136) |
| OLED 0.96" | Local display |
| NEO-6M GPS | Location tracking |

---

## 👥 Team

| Name | Specialization | Role |
|------|---------------|------|
| [Your Name] | IISE - Embedded Systems | ESP32 firmware, Wokwi simulation |
| [Teammate 2] | IL - Software Engineering | Backend API, Dashboard, Mobile App |
| [Teammate 3] | ADIA - AI & Data Analytics | AI model, Data analytics |

---

## 🏗️ Architecture
>>>>>>> c6aef8a032431b046f5ab10da9d8ca2b91f55b8a
