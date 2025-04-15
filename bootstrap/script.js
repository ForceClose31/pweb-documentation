const projects = [
  { title: "Project One", description: "An amazing project using AI." },
  { title: "Project Two", description: "Realtime dashboard with WebSockets." },
  { title: "Project Three", description: "Modular app with advanced routing." },
];

const projectList = document.getElementById("projectList");

projects.forEach((project, index) => {
  const col = document.createElement("div");
  col.className = "col-md-4 mb-4 fade-scroll";
  col.innerHTML = `
      <div class="card bg-dark text-white h-100 p-3">
        <h3>${project.title}</h3>
        <p>${project.description}</p>
      </div>
    `;
  projectList.appendChild(col);
});

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("Message sent! Thank you for contacting us.");
  this.reset();
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
});

document.querySelectorAll(".fade-scroll").forEach((element) => {
  observer.observe(element);
});
