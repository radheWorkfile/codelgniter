    <style>
    .show-wave {position: relative;z-index: 1;text-align: center;line-height: 80px;box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);}
    .show-wave::before {content: "";position: absolute;top: 50%;left: 50%;width: 100%;height: 100%;
    border-radius: 50%;background: rgba(201, 207, 212, 0.3); transform: translate(-50%, -50%);animation: wave-pulse 1.8s infinite ease-out;z-index: -1;}
    @keyframes wave-pulse {
    0% {transform: translate(-50%, -50%) scale(1);opacity: 0.7;}
    100% {transform: translate(-50%, -50%) scale(2.5);opacity: 0;}}
    </style>
