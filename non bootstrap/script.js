function scrollToSection(id) {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  }

  const navLinks = document.querySelectorAll('.nav-links a');
  navLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const href = link.getAttribute('href').substring(1);
      scrollToSection(href);
    });
  });

  const projects = [
    { title: 'Project One', description: 'An amazing project using AI.' },
    { title: 'Project Two', description: 'Realtime dashboard with WebSockets.' },
    { title: 'Project Three', description: 'Modular app with advanced routing.' }
  ];

  const projectList = document.getElementById('projectList');

  projects.forEach(project => {
    const div = document.createElement('div');
    div.className = 'project-item';
    div.innerHTML = `<h3>${project.title}</h3><p>${project.description}</p>`;
    projectList.appendChild(div);
  });

  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Message sent! Thank you for contacting us.');
    this.reset();
  });