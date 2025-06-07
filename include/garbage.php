    <style>
    .actYrk {display: inline-block;}
    .actYrk span {opacity: 0;display: inline-block;position: relative;transform: translateY(20px);transition: all 0.4s ease;white-space: pre; }
    .actYrk span::after {content: '';position: absolute;right: -2px;
    top: 0;height: 100%;width: 2px;background-color: #fff;opacity: 0;transition: opacity 0.3s ease;}
    .actYrk span.show {opacity: 1;transform: translateY(0);}
    .actYrk span.show::after {opacity: 1;animation: blink 0.8s steps(1) infinite;  }
    @keyframes blink {0%, 100% { opacity: 1; }50% { opacity: 0; }}
    </style>

    <script>
    const heading = document.querySelector(".actYrk");
    const text = heading.textContent;
    heading.textContent = "";
    text.split("").forEach((char, i) => {
    const span = document.createElement("span");
    span.textContent = char;
    heading.appendChild(span);
    setTimeout(() => {
    span.classList.add("show");
    }, i * 80); // adjust speed
    });
    </script>