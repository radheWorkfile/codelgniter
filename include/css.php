              
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
        <link rel="stylesheet" href="assets/media/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/media/css/animate.min.css">
        <link rel="stylesheet" href="assets/media/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/media/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/media/css/aos.css">
        <link rel="stylesheet" href="assets/media/css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <style>
         * { transition: all 0.3s ease; }
        .custom-rotation {color:white;font-size: 24px;font-weight: bold;display: inline-block;white-space: nowrap;}
        .custom-rotation span {display: inline-block;opacity: 0;transform-origin: top;animation: hangRotate 1s ease-in-out forwards;}
        @keyframes hangRotate {
        0% {transform: rotateX(0deg);opacity: 0;}
        50% {transform: rotateX(90deg);opacity: 1;}
        100% {transform: rotateX(0deg);opacity: 1;}}


        :root { --primary: #0077ff; --bg:#f8f8f8; --text: #333; }
        body {
                font-family: 'Inter', sans-serif;
                line-height: 1.6;
                font-size: 16px;
                color: #333;
                margin: 0;
                padding: 0;
                background-color: var(--bg);
                color: var(--text);
        }
        html { scroll-behavior: smooth; }
        .element { will-change: transform, opacity; }

        </style>

        
 <!-- Text slide section start by actYrk  -->
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
    <!-- Text slide section start by actYrk  -->