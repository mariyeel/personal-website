# Mariel Joyce — Personal CV Website

A responsive portfolio for Mariel Joyce, an aspiring Software Developer / Full Stack Web Developer in the Philippines. Includes profile information, education, skills, projects, professional profiles, achievements, and leadership.

**Author:** Mariel Joyce  
**Live Vercel URL:** [Add your deployed website](https://YOUR-PROJECT.vercel.app)

## Tech stack

HTML5, CSS3, and vanilla JavaScript. Google Fonts provides DM Sans and Manrope, with local system fallbacks. No dependency installation or compilation is required.

## File architecture

```text
.
├── index.html                 # Semantic page sections and metadata
├── style.css                  # Design system and responsive styles
├── main.js                    # Content data and interactions
├── assets/
│   └── profile-placeholder.svg # Replace with your formal photo
├── .gitignore
├── IMPLEMENTATION_PLAN.md
└── README.md
```

## Local setup

```powershell
git clone YOUR_REPOSITORY_URL
cd YOUR_REPOSITORY_FOLDER
```

Open `index.html` in your browser. For a local server, if Python is installed:

```powershell
python -m http.server 8000
```

Visit `http://localhost:8000`. Stop the server with Ctrl+C.

## Personalize before sharing

- Update email, phone, university, program, and year level in `index.html`.
- Add real awards, certificate details, experience, organizations, and dates. Unverified details are intentionally labeled as placeholders.
- Add a formal photo to `assets/` and update the hero image source and alternative text.
- Set the `profiles` URLs and each project's `github` and `demo` URLs in `main.js`. Null URLs show a coming-soon message and never navigate to fabricated profiles.
- Replace illustrative project previews with actual screenshots and accurate alternative text. Current previews are explicitly labeled concepts.
- Skill bars represent areas of focus, not invented proficiency ratings.
- Update the live URL in this README after deployment.

## Git and meaningful commits

This folder already contains a Git repository. For a new folder only, initialize it first:

```powershell
git init
```

Review and commit logical groups of completed work:

```powershell
git status
git add index.html style.css assets/
git commit -m "Build responsive CV layout and profile sections"
git add main.js
git commit -m "Add project rendering and accessible navigation interactions"
git add README.md IMPLEMENTATION_PLAN.md .gitignore
git commit -m "Document setup personalization and deployment"
```

Create an empty GitHub repository, then connect it. Inspect any existing remote before adding one:

```powershell
git remote -v
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPOSITORY.git
git push -u origin main
```

If `origin` already points to the intended repository, skip `git remote add`. Future changes should get focused commits describing the actual change; never fabricate past development history.

## Deploy to Vercel

1. Push your commits to GitHub.
2. Sign into Vercel with your GitHub account.
3. Choose **Add New → Project** and import this repository. Grant access to the repository if prompted.
4. Select **Other** as the framework preset and leave the project root at the repository root.
5. Leave the build and installation commands unset; serve the root directory containing `index.html` (use `.` as the output directory if requested).
6. Deploy, then open the assigned HTTPS URL and check it on desktop and mobile.
7. Replace the README's live-link placeholder with your actual URL and commit it.

Future pushes to the production branch trigger deployments; branches can receive preview deployments. Dashboard labels can vary.

## Review checklist

- Check at 360px, 768px, 1024px, and a wide desktop width for overflow.
- Navigate with Tab and activate the menu with Enter or Space; Escape closes it.
- Confirm section navigation and project/profile links after inserting real URLs.
- Enable reduced motion and verify comfortable navigation.
- Confirm all personal details and project descriptions before publication.
