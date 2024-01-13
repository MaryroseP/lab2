
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var W = window.innerWidth;
    var H = window.innerHeight;

    canvas.width = W;
    canvas.height = H;

    var fontSize = 16;
    var columns = Math.floor(W / fontSize);
    var drops = [];
    for(var i=0; i<columns; i++){
        drops.push(0);
    }
    var str = "JavaScript Hacking Effect";
    function draw(){
        context.fillStyle = "rgba(0,0,0,0.05)";
        context.fillRect(0, 0, W, H);
        context.fontSize = "700 " + fontSize + "px";
        context.fillStyle = "#00cc33";
        for(var i=0; i<columns; i++){
            var index = Math.floor(Math.random()*str.length);
            var x = i * fontSize;
            var y = drops[i] * fontSize;
            context.fillText(str[index], x, y);
            if(y >= canvas.height && Math.random() > 0.99){
                drops[i] = 0;
            }
            drops[i]++;
        }
    }
    draw();
    setInterval(draw, 35);

        // Hacker Text Starts Here

        const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

        class HackerText {
            constructor(element) {
                this.element = element;
                this.iterations = 0;
                this.startAnimation();
            }

            startAnimation() {
                const interval = setInterval(() => {
                    this.element.innerText = this.element.innerText.split("")
                        .map((letter, index) => {
                            if (index < this.iterations) {
                                return this.element.dataset.value[index];
                            }
                            return letters[Math.floor(Math.random() * 26)];
                        })
                        .join("");

                    if (this.iterations >= this.element.dataset.value.length) {
                        clearInterval(interval);
                        setTimeout(() => {
                            this.iterations = 0;
                            this.startAnimation();
                        }, 1000);
                    }

                    this.iterations += 1;
                }, 30);
            }
        }

        // Apply the class to each element with the "hacker-text" class
        const hackerTextElements = document.querySelectorAll('.hacker-text');
        hackerTextElements.forEach(element => new HackerText(element));

