let img = document.getElementById("ourmap");

img.addEventListener("click", (e) => {
    console.log(`x: ${e.clientX}, y: ${e.clientY}`);
});

// let ctx = document.getElementById("ourmap2").getContext("2d");
// console.log(ctx);
// ctx.drawImage(img, 0, 0, img.width,    img.height,     // source rectangle
                //    0, 0, canvas.width, canvas.height);