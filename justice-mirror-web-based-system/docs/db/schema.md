# Database Schema Plan (Week‑1)

## Tables
### 1) roles
- `id` (PK)
- `name` (admin, lawyer, client)

### 2) users
- `id` (PK)
- `name`
- `email` (unique)
- `password`
- `role_id` (FK → roles.id)
- timestamps

### 3) clients
- `id` (PK)
- `name`
- `phone`
- `email` (nullable)
- `address` (nullable)
- timestamps

### 4) cases
- `id` (PK)
- `case_title`
- `case_type` (civil/criminal/family/others)
- `client_id` (FK → clients.id)
- `lawyer_id` (FK → users.id)
- `status` (open/in_progress/closed)
- `description` (nullable)
- timestamps

### 5) hearings
- `id` (PK)
- `case_id` (FK → cases.id)
- `hearing_date` (date)
- `remarks` (nullable)
- timestamps

### 6) appointments
- `id` (PK)
- `client_id` (FK → clients.id)
- `lawyer_id` (FK → users.id)
- `requested_at` (datetime)
- `appointment_at` (datetime, nullable)
- `status` (pending/approved/rejected/completed)
- `note` (nullable)
- timestamps

### 7) documents
- `id` (PK)
- `case_id` (FK → cases.id)
- `uploaded_by` (FK → users.id)
- `file_name`
- `file_path`
- `mime_type` (optional)
- timestamps

---

## Relationships (ER Summary)
- **Role 1→M Users**
- **Client 1→M Cases**
- **User(Lawyer) 1→M Cases**
- **Case 1→M Hearings**
- **Case 1→M Documents**
- **Client 1→M Appointments**
- **Lawyer 1→M Appointments**
