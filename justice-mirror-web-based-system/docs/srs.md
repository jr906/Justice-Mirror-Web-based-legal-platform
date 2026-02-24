# Software Requirements Specification (SRS)
## Web‑Based Law Firm Case & Client Management System

### 1. Introduction
**Purpose:**  
Digitize and organize day‑to‑day law firm operations: **clients, cases, hearings, appointments, and documents**.

**Audience:**  
University evaluator (professor), developer (student), and future maintainers.

**Scope:**  
A mid‑level web application using **Laravel + MySQL**, designed for small to medium law firms.

---

### 2. Problem Statement
Many law firms maintain case records manually (paper/WhatsApp/excel), causing:
- missed hearing dates due to lack of reminders,
- document loss/misplacement,
- difficulty tracking case status and history,
- time wasted searching client information.

---

### 3. Objectives
- Centralize **client** and **case** data in one system.
- Track **hearing schedules** and show upcoming hearings.
- Manage **appointments** with request/approval workflow.
- Store and retrieve **case documents** securely.
- Enforce **role‑based access** for Admin, Lawyer, Client.

---

### 4. User Roles & Permissions
| Role | Key Permissions |
|---|---|
| **Admin** | Manage users/lawyers, manage all clients/cases, view reports, overall control |
| **Lawyer** | Manage assigned cases, schedule hearings, upload documents for assigned cases, approve/reject appointments |
| **Client** | View own cases status, request appointments, view/download permitted documents |

---

### 5. Functional Requirements
**FR‑1 Authentication**
- Users can log in/out; passwords stored securely (hashed).
- Role‑based dashboards.

**FR‑2 Client Management**
- Admin/Lawyer can create, update, view, and search clients.
- Client profile includes contact & address details.

**FR‑3 Case Management**
- Admin/Lawyer can create and update cases.
- Each case is linked to **one client** and **one lawyer**.
- Case status: `Open`, `In Progress`, `Closed`.
- Case detail page shows hearings & documents.

**FR‑4 Hearing Management**
- Lawyer can add hearing date with remarks for a case.
- System lists upcoming hearings (next 7/14 days configurable).

**FR‑5 Appointment Management**
- Client requests appointment with preferred date/time + note.
- Lawyer/Admin approves or rejects request.
- Appointment status: `Pending`, `Approved`, `Rejected`, `Completed`.

**FR‑6 Document Management**
- Lawyer/Admin uploads documents linked to a case.
- Files can be downloaded by permitted roles.
- Document list shows upload date and uploader.

**FR‑7 Dashboard & Search**
- Dashboards show counts: total cases, open cases, upcoming hearings, pending appointments.
- Search + pagination on lists (clients, cases).

---

### 6. Non‑Functional Requirements
- **Security:** Role‑based authorization; prevent unauthorized access to cases.
- **Performance:** List pages load within reasonable time for small/medium dataset.
- **Usability:** Simple navigation; consistent layout; clear status badges.
- **Reliability:** Input validation; safe file uploads (size/type restrictions).
- **Maintainability:** MVC structure, clean routes, reusable components.

---

### 7. Assumptions & Constraints
- Internet access available for using the system.
- Mid‑level complexity; no payment gateways or advanced analytics required.
- UI built using **Blade + Tailwind**, backend in **Laravel**, database **MySQL**.

---

### 8. Future Enhancements (Optional)
- Email/SMS reminders for hearing dates.
- PDF case summary export.
- Audit logs (who updated what).
- Multi‑firm support (tenancy).
