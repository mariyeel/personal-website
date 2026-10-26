// Replace null URLs with your real public profile and project addresses.
const profiles = { github: null, linkedin: null, facebook: null, instagram: null };
const skills = [
  ['Languages & frameworks', ['HTML', 'CSS', 'JavaScript', 'PHP', 'Dart', 'Flutter', 'Laravel']],
  ['Databases & cloud', ['PostgreSQL', 'Firebase Authentication', 'Firebase Realtime Database']],
  ['Mapping & visualization', ['Mapbox GL JS', 'Leaflet', 'OpenStreetMap']],
  ['Tools & methods', ['Git', 'GitHub', 'Figma', 'DBSCAN spatial clustering', 'Sequence Mining']]
];
const projects = [
  { title: 'Gabay', subtitle: 'IoT Smart Navigation System', description: 'An IoT-enabled navigation system combining ultrasonic obstacle detection and haptic feedback with integrated maps. Built around Laravel backend routing and PostgreSQL databases.', tags: ['IoT', 'Mapbox GL JS', 'Laravel', 'PostgreSQL'], theme: 'gabay', mock: '<div class="mock-map"></div>', github: null, demo: null },
  { title: 'Merch Haven+', subtitle: 'A home for fandom finds', description: 'An e-commerce platform dedicated to K-pop, J-pop, and P-pop merchandise. A digital space that brings fans closer to the things they love.', tags: ['E-commerce', 'Web development'], theme: 'merch', mock: '<div class="mock-tiles"><span>✦</span><span>♫</span><span>♡</span></div>', github: null, demo: null },
  { title: 'School Organization Management System', subtitle: 'Connecting people & activities', description: 'A comprehensive web-based system for managing organizational activities and member records, bringing essential information into one organized space.', tags: ['Web application', 'Member management'], theme: 'school', mock: '<div class="mock-rows"><span></span><span></span><span></span></div>', github: null, demo: null }
];
const chip = text => `<span class="chip">${text}</span>`;
document.querySelector('#skill-groups').innerHTML = skills.map(([title, items], index) => `<article class="glass skill-card"><span class="skill-number">0${index + 1}</span><h3>${title}</h3><div class="chips">${items.map(chip).join('')}</div><div class="focus-track" aria-hidden="true"><span></span></div></article>`).join('');
function projectLink(url, label) {
  return url ? `<a href="${url}" target="_blank" rel="noopener noreferrer">${label} ↗</a>` : `<a class="placeholder-link" href="#connect" aria-disabled="true">${label} · coming soon ↗</a>`;
}
document.querySelector('#project-list').innerHTML = projects.map((project, index) => `<article class="project"><div class="project-visual ${project.theme}" role="img" aria-label="Illustrative ${project.title} preview; replace with a real screenshot"><div class="mock-window"><div class="mock-bar"><i></i><i></i><i></i></div><div class="mock-content"><strong>${project.title === 'School Organization Management System' ? 'Organization hub' : project.title}</strong><p>${project.subtitle}</p>${project.mock}</div></div><span class="visual-label">CONCEPT PREVIEW · SCREENSHOT PLACEHOLDER</span></div><div><span class="project-index">PROJECT / 0${index + 1}</span><h3>${project.title}</h3><p>${project.description}</p><div class="chips">${project.tags.map(chip).join('')}</div><div class="project-links">${projectLink(project.github, 'GitHub')}${projectLink(project.demo, 'Live demo')}</div></div></article>`).join('');
document.querySelector('#repo-links').innerHTML = projects.map(project => projectLink(project.github, project.title)).join('');
const profileCards = document.querySelectorAll('.profile-card > .placeholder-link');
['github', 'linkedin'].forEach((key, index) => {
  if (!profiles[key]) return;
  const link = profileCards[index];
  link.href = profiles[key]; link.textContent = `${key === 'github' ? 'GitHub' : 'LinkedIn'} profile ↗`;
  link.classList.remove('placeholder-link'); link.removeAttribute('aria-disabled');
  link.target = '_blank'; link.rel = 'noopener noreferrer';
});
document.querySelector('.socials').innerHTML = Object.entries(profiles).map(([name, url]) => url ? `<a href="${url}" target="_blank" rel="noopener noreferrer">${name} ↗</a>` : `<span>${name} · coming soon</span>`).join('');
const menu = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#navigation');
function closeMenu() { navigation.classList.remove('open'); menu.setAttribute('aria-expanded', 'false'); }
menu.addEventListener('click', () => { const open = navigation.classList.toggle('open'); menu.setAttribute('aria-expanded', String(open)); });
navigation.addEventListener('click', event => { if (event.target.closest('a')) closeMenu(); });
document.addEventListener('keydown', event => { if (event.key === 'Escape' && navigation.classList.contains('open')) { closeMenu(); menu.focus(); } });
document.addEventListener('click', event => { if (!event.target.closest('.header')) closeMenu(); });
window.matchMedia('(min-width: 701px)').addEventListener('change', closeMenu);
let toastTimer;
document.addEventListener('click', event => {
  if (!event.target.closest('.placeholder-link')) return;
  event.preventDefault();
  const toast = document.querySelector('#toast');
  toast.textContent = 'This link will be available when Mariel adds her profile or project URL.';
  toast.classList.add('visible'); clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('visible'), 3500);
});
document.querySelector('#year').textContent = new Date().getFullYear();
if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver(entries => entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('in-view'); observer.unobserve(entry.target); } }), { threshold: 0.15 });
  document.querySelectorAll('.skill-card').forEach(card => observer.observe(card));
} else document.querySelectorAll('.skill-card').forEach(card => card.classList.add('in-view'));
