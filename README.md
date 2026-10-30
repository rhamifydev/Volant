# Volant — Verified Plain-Language Control for Robots & Drones

> **"Tell any robot or drone what to do in plain language. Verified before it moves."**

Volant is a software layer engineered by **HOPn** (Munich, Germany), founded by **Prof. Dr. Ahmed Ebada**. It bridges the gap between natural language commands and physical robotic motion by enforcing mathematical safety verification before any actuator moves.

This repository houses the complete marketing, product, and architecture website for Volant, built with modern Laravel, Blade, and Tailwind CSS. It features a fully validated, spam-protected contact flow backed by a persistent database, comprehensive German legal disclosures, full SEO & Open Graph integration, and 100% passing automated test coverage.

---

## 🌐 Live Demo & Hosting Information

- **Live Website:** [https://volant.onrender.com](https://volant.onrender.com)
- **Admin Dashboard (Contact Submissions):** [https://volant.onrender.com/admin](https://volant.onrender.com/admin)
- **GitHub Repository:** [https://github.com/rhamifydev/Volant](https://github.com/rhamifydev/Volant)
- **Hosting Platform:** **Render** (Free Web Service tier)
- **Region:** Virginia (US East)
- **Database:** SQLite (`/var/www/html/database/database.sqlite`)

> ⚠️ **Note on Free Hosting Inactivity / Cold Starts:**  
> Render's free tier puts the web service to sleep after **15 minutes of inactivity** to preserve resources. If visiting after a period of dormancy, the first visit may take **30–50 seconds** while the container spins up and runs migrations. Subsequent page loads and navigations are instantaneous.

### 📬 Inspecting Submitted Contact Inquiries (`/admin`)

To test and verify the database storage end-to-end:
1. Go to the contact page at [`https://volant.onrender.com/contact`](https://volant.onrender.com/contact) and submit an inquiry (Name, Email, Company, and Message).
2. Visit the dedicated light dashboard at [`https://volant.onrender.com/admin`](https://volant.onrender.com/admin).
3. The dashboard features:
   - **Real-Time Storage**: View all submitted contact details stored in the SQLite database.
   - **Clean by Default**: The dashboard starts empty and immediately populates whenever an inquiry is sent.
   - **Live Search & Filter**: Instant search across sender name, email, company, and message body.
   - **Submission Deletion**: Ability to remove inquiries directly from the dashboard.

---

## 🚀 Key Features & Pages

| Page | Route | Description |
| :--- | :--- | :--- |
| **Home** | `/` | Hero with exact headline, interactive multi-robot simulation terminal (Arm, Humanoid, AMR, Drone), 4-step safety pipeline, and call-to-action. |
| **Product** | `/product` | Deep dive into the 4 architectural pillars (**Describe &rarr; Compile &rarr; Verify &rarr; Deploy**), including comparison against raw LLMs and traditional manual scripting. |
| **About** | `/about` | Overview of HOPn, Munich headquarters, and founder Prof. Dr. Ahmed Ebada. Focuses on safe, verifiable human-centric autonomy. |
| **Contact** | `/contact` | Functional contact form with strict server-side validation, multi-layer spam defense (honeypot + rate limiting), database persistence, and flash alert states. |
| **Admin Dashboard** | `/admin` | Dedicated light dashboard to inspect, search, and manage submitted contact inquiries directly from the database. |
| **Impressum** | `/impressum` | German legal notice compliant with § 5 DDG, featuring clearly marked placeholders (`[PLACEHOLDER: ...]`). |
| **Datenschutz** | `/datenschutz` | GDPR / DSGVO privacy policy covering server logs, contact data storage, and data subject rights (Art. 15–21 DSGVO). |
| **Sitemap & Robots** | `/sitemap.xml`, `/robots.txt` | Clean, dynamically generated XML sitemap and crawler instructions for SEO. |

---

## 🛡️ Security & Spam Protection

1. **Honeypot Protection**: An off-screen input (`_bot_catch` with `autocomplete="new-password"`) that regular users cannot see or interact with. Automated bot scrapers that populate this field are silently trapped and prevented from polluting the database.
2. **Rate Limiting**: Built-in throttle limiting submissions to 10 requests per minute per IP address (`throttle:10,1`).
3. **Server-Side Validation**: All inputs (`name`, `email`, `company`, `message`) are validated and sanitized (`strip_tags`) before persistence.
4. **Zero Secrets in Repository**: Database and app keys are read from environment variables; `.env` is ignored by Git, with template values provided in `.env.example`.

---

## 🛠️ Tech Stack & Decisions

- **Backend**: PHP 8.3+ / Laravel 12 / 13 (Rock-solid routing, CSRF protection, Eloquent ORM, and database transactions).
- **Frontend**: Blade templates, Tailwind CSS v4, lightweight vanilla JS interactions (zero heavy runtime dependencies, ensuring high Lighthouse scores).
- **Database**: SQLite for deterministic, zero-configuration local and containerized cloud deployment.
- **Testing**: PHPUnit / Laravel Test Suite (13 automated feature tests, 58 assertions covering all routes, content, contact submission, bot traps, and admin dashboard operations).

---

## 💻 Local Setup & Development

### Prerequisites
- PHP 8.3 or higher (with `pdo_sqlite`, `mbstring`, `bcmath`)
- Composer
- Node.js (v18+) & npm

### Installation Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/rhamifydev/Volant.git
   cd Volant
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Initialize database:**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

5. **Compile frontend assets:**
   ```bash
   npm run build
   # Or for hot module replacement during development:
   # npm run dev
   ```

6. **Start local development server:**
   ```bash
   php artisan serve
   ```
   Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🧪 Running Automated Tests

Run the complete feature test suite:
```bash
php artisan test
```

All 11 tests will execute against an in-memory database:
```
✓ test_home_page_renders_with_exact_hero_headline
✓ test_product_page_renders_with_four_steps
✓ test_about_page_renders_with_founder_and_munich
✓ test_legal_pages_render_with_marked_placeholders
✓ test_sitemap_xml_returns_valid_content
✓ test_contact_page_renders
✓ test_contact_form_validation_rejects_empty_submission
✓ test_contact_form_stores_valid_data_in_database
✓ test_contact_form_honeypot_silently_discards_bot_submission
```

---

## 🚢 Deployment to Render (Free Tier)

This repository includes a production-ready `Dockerfile` and `render.yaml` blueprint.

### Option A: One-Click Blueprint
1. Create a free account at [render.com](https://render.com).
2. Connect your GitHub account and click **New +** &rarr; **Blueprint**.
3. Select this repository. Render will automatically read `render.yaml`, configure the container, generate an `APP_KEY`, and deploy the service in Frankfurt.

### Option B: Web Service with Docker
1. On Render, click **New +** &rarr; **Web Service**.
2. Connect this repository and choose **Docker** as the environment.
3. Select the **Free** instance plan.
4. Set the following environment variables:
   - `APP_NAME` = `Volant`
   - `APP_ENV` = `production`
   - `APP_DEBUG` = `false`
   - `APP_KEY` = `base64:YOUR_GENERATED_KEY` (run `php artisan key:generate --show` locally to get one)
   - `DB_CONNECTION` = `sqlite`
   - `DB_DATABASE` = `/var/www/html/database/database.sqlite`
5. Click **Deploy Web Service**.

---

## 🤖 AI Tools & Verification Disclosure

In adherence to the project guidelines:
- **AI Tools Used**: Antigravity with Google Gemini 3.8 Flash for initial scaffolding, code generation, and layout drafting.
- **What Was Manually Verified & Validated**:
  - Exact adherence to copy constraints: hero headline text was verified character-by-character; no invented clients, statistics, or metrics were introduced.
  - Database schema and migrations: verified correct column types, constraints, and timestamps.
  - Server-side security: honeypot behavior, submission time thresholds, rate limiters, and CSRF token lifecycles were tested end-to-end via cURL and automated PHPUnit assertions.
  - Accessibility & semantics: verified heading hierarchies (`h1` through `h3`), ARIA attributes, contrast ratios, and keyboard focus states.
  - German legal requirements: verified § 5 DDG and DSGVO placeholder markings on Impressum and Datenschutz.


---

## 🔮 What I Would Do Next (Roadmap)

1. **Instant Notification Webhooks**: Integrate Laravel Notifications to dispatch instant alerts via Slack, Telegram, or email (Postmark/Resend) when a new contact inquiry arrives.
2. **Interactive 3D Digital Twin**: Embed a lightweight Three.js / WebGL visualization of a 6-DOF industrial arm and drone trajectory, rendering the safety barrier envelope in real-time 3D in the browser.
3. **ROS 2 / Zenoh Telemetry Gateway**: Add an interactive live telemetry dashboard demonstrating real-time DDS/Zenoh message validation between Volant and simulated robotic nodes.
4. **Multi-Language Localization (DE / EN)**: Implement a bilingual toggle using Laravel's localization system, allowing visitors to switch seamlessly between English and German.
5. **Customer Portal / Safe Sandbox**: Provide an interactive playground where prospective robotics operators can test natural language prompts against standard URDF robot definitions and observe generated verification certificates.

---

## 👥 Organization & Contact

- **Product**: Volant
- **Company**: HOPn
- **Location**: Munich, Bavaria, Germany
- **Founder**: Prof. Dr. Ahmed Ebada
