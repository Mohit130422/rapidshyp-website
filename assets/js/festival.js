const canvas = document.getElementById('snow-canvas');
const ctx = canvas.getContext('2d');

let width, height, particles = [];
const snowImg = new Image();
snowImg.src = 'https://rapidshyp-website-cdn.s3.ap-south-1.amazonaws.com/temp/christmas/Snowflake.svg'; // path to your image

function init() {
    width = window.innerWidth;
    height = window.innerHeight;

    canvas.width = width;
    canvas.height = height;

    particles = [];
    for (let i = 0; i < 50; i++) {
        particles.push({
            x: Math.random() * width,
            y: Math.random() * height,
            size: Math.random() * 8 + 10, // image size
            speed: Math.random() * 1.5 + 0.5,
            sway: Math.random() * 1
        });
    }
}

function draw() {
    ctx.clearRect(0, 0, width, height);

    for (let p of particles) {
        ctx.drawImage(
            snowImg,
            p.x,
            p.y,
            p.size,
            p.size
        );
    }

    update();
}

function update() {
    for (let p of particles) {
        p.y += p.speed;
        p.x += Math.sin(p.y * 0.02) * p.sway;

        if (p.y > height) {
            p.y = -p.size;
            p.x = Math.random() * width;
        }
    }
}

window.addEventListener('resize', init);

snowImg.onload = () => {
    init();
    setInterval(draw, 30);
};
