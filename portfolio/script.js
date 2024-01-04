// GITHUB BUTTON
let github_button = document.getElementById("github_button");

github_button.addEventListener("click", () => {
  window.open("https://github.com/sphyxi4");
});
// END GITHUB BUTTON

// CERTIFICATE BUTTON
let certificate = document.getElementById("certificates");

certificate.addEventListener("click", () => {
  window.open("../src/certificates.html");
});
// END CERTIFICATE BUTTON

// GALLERY CLICK FUNCTION
const panels = document.querySelectorAll(".panel");

panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    removeActiveClasses();
    panel.classList.add("active");
  });
});

function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

const VSCODE = document.querySelector(".skill-card");
const HTML = document.querySelector(".html");
const CSS = document.querySelector(".css");
const JS = document.querySelector(".javascript");
const PYTHON = document.querySelector(".python");
const JAVA = document.querySelector(".java");
const LINUX = document.querySelector(".linux");
const HARDWARE = document.querySelector(".hardware");
const PHP = document.querySelector(".php");
const FRAMEWORK = document.querySelector(".frameworks");

let modal = document.getElementById("modal");

let TOOL = document.getElementById("tool-name");
let DESC = document.getElementById("desc-name");

function vsCode(name, desc) {
  VSCODE.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Html(name, desc) {
  HTML.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Css(name, desc) {
  CSS.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function JavaScript(name, desc) {
  JS.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Python(name, desc) {
  PYTHON.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Java(name, desc) {
  JAVA.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Linux(name, desc) {
  LINUX.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Hardware(name, desc) {
  HARDWARE.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Php(name, desc) {
  PHP.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

function Frameworks(name, desc) {
  FRAMEWORK.addEventListener("click", () => {
    modal.style.display = "block";
    TOOL.innerHTML = name;
    DESC.innerHTML = desc;
  });
}

const closemodal = document.getElementById("closeModal");

function closeModal() {
  closemodal.addEventListener("click", () => {
    modal.style.display = "none";
  });
}

vsCode(
  "VSCODE",
  "As a proficient user of Visual Studio Code (VSCode), I harness the power of this versatile code editor to streamline my development workflow and enhance coding efficiency."
);
Html(
  "HTML",
  "I am proficient in HTML (HyperText Markup Language), the foundational language of the web. With a keen eye for clean and semantic markup, I craft well-structured documents that form the backbone of modern web development."
);
Css(
  "CSS",
  "Mastery of Cascading Style Sheets (CSS) is at the core of my ability to transform web concepts into visually stunning and responsive user interfaces. With a keen eye for design and a commitment to best practices, I leverage CSS to create seamless and engaging web experiences."
);
JavaScript(
  "JAVASCRIPT",
  "As a seasoned web developer, I bring a wealth of experience in harnessing the power of JavaScript to create dynamic and interactive web applications. JavaScript is my programming language of choice for client-side development, allowing me to craft seamless and engaging user experiences"
);
Python(
  "PYTHON",
  "As a skilled Python developer, I bring a wealth of experience in leveraging the versatility and power of the Python programming language. Python is not just a language for me; it's a tool that enables me to design elegant solutions, from rapid prototyping to building robust applications"
);
Java(
  "JAVA",
  "As a seasoned Java developer, I bring a wealth of experience in crafting robust and scalable applications using the Java programming language. Java is not just a programming language for me; it's a versatile tool that allows me to build anything from enterprise-level applications to mobile solutions"
);
Linux(
  "LINUX",
  "As a proficient Linux user, I navigate the open-source landscape with ease, leveraging the power and flexibility of the Linux operating system. With a deep understanding of its command-line interface and system architecture, I harness Linux to create robust and secure computing environments."
);
Hardware(
  "HARDWARE",
  "As a tech enthusiast and computer hardware aficionado, I possess a deep understanding of the intricate components that power modern computing. My expertise extends from assembling and configuring hardware to optimizing systems for peak performance"
);
Php(
  "PHP",
  "As a skilled PHP developer, I wield the power of this server-side scripting language to create dynamic and interactive web applications. PHP is not just a programming language for me; it's a versatile tool that allows me to craft robust and scalable solutions for the modern web."
);
Frameworks(
  "FRAMEWORKS",
  "My expertise encompasses a range of frameworks, including React.js for dynamic single-page applications, Tailwind CSS for streamlined styling through utility-first classes, Bootstrap for efficient front-end development with pre-designed components, Django for Python-based web development emphasizing the 'don't repeat yourself' principle, and Laravel for PHP web applications, valued for its elegant syntax and extensive features."
);
closeModal();
