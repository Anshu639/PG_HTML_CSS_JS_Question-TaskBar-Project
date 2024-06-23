document.addEventListener("DOMContentLoaded", function () {
    let video = document.querySelector(".video-player video");
    let videoPlayer = document.querySelector(".video-player");
    let videoProgressBar = document.querySelector(".videoProgressBar");
    let videoProgressDuration = document.querySelector(
      ".videoProgressBar .dot"
    );
    let volume = document.querySelector(".volume");
    let volIcon = document.querySelector(".volume-control i");
    let fullScreen = document.querySelector(".full-screen");
    let currentVideoDuration = document.querySelector(
      ".currentVideoDuration"
    );
    let totalVideoDuration = document.querySelector(".totalVideoDuration");
    let playBtn = document.querySelector(".playBtn");
    let pauseBtn = document.querySelector(".pauseBtn");
    let forwardVideo = document.querySelector(".forwardVideo");
    let reverseVideo = document.querySelector(".reverseVideo");

    videoPlayer.addEventListener("mousemove", function () {
      this.classList.add("active");
    });

    videoPlayer.addEventListener("mouseleave", function () {
      this.classList.remove("active");
    });

    video.addEventListener("timeupdate", function (e) {
      let videoPosition = video.currentTime / video.duration;
      videoProgressDuration.style.left = videoPosition * 100 + "%";
    });

    const i = setInterval(function () {
      if (video.readyState > 0) {
        var minutes = parseInt(video.duration / 60, 10);
        var seconds = Math.round(video.duration % 60);

        totalVideoDuration.innerText = `${minutes}:${seconds}`;
        clearInterval(i);
      }
    }, 10);

    videoProgressBar.addEventListener("click", function (e) {
      let videoDuration = video.duration;
      let progressWidthValue = this.clientWidth;
      let clickOffsetX = e.offsetX;

      video.currentTime =
        (clickOffsetX / progressWidthValue) * videoDuration;
    });

    fullScreen.addEventListener("click", function () {
      if (video.requestFullscreen) {
        video.requestFullscreen();
      } else if (video.mozRequestFullScreen) {
        video.mozRequestFullScreen();
      } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
      }
    });

    video.addEventListener("timeupdate", function () {
      let currentVideoTime = video.currentTime;
      let currentMin = Math.floor(currentVideoTime / 60);
      let currentSec = Math.floor(currentVideoTime % 60);

      currentMin = currentMin < 10 ? "0" + currentMin : currentMin;
      currentSec = currentSec < 10 ? "0" + currentSec : currentSec;
      currentVideoDuration.innerHTML = `${currentMin}:${currentSec}`;
    });

    playBtn.addEventListener("click", function () {
      this.classList.add("hide");
      pauseBtn.classList.remove("hide");
      video.play();
    });

    pauseBtn.addEventListener("click", function () {
      this.classList.add("hide");
      playBtn.classList.remove("hide");
      video.pause();
    });

    reverseVideo.addEventListener("click", function () {
      video.currentTime -= 10;
    });

    forwardVideo.addEventListener("click", function () {
      video.currentTime += 10;
    });

    volume.addEventListener("input", function () {
      if (this.value < 20) {
        volIcon.classList.remove("fa-volume-high");
        volIcon.classList.add("fa-volume-low");
      } else if (this.value > 20) {
        volIcon.classList.remove("fa-volume-low");
        volIcon.classList.remove("fa-volume-xmark");
        volIcon.classList.add("fa-volume-high");
      } else if (this.value == 0) {
        volIcon.classList.remove("fa-volume-low");
        volIcon.classList.add("fa-volume-xmark");
      }
      video.volume = this.value / 100;
    });

    document
      .querySelector(".fa-volume-high")
      .addEventListener("click", function () {
        volIcon.classList.toggle("fa-volume-high");
        volIcon.classList.toggle("fa-volume-xmark");
        video.volume = 0;
      });

    volIcon.addEventListener("click", function () {
      volIcon.classList.toggle("fa-volume-xmark");
      volIcon.classList.toggle("fa-volume-high");
      video.volume = 1;
    });

    video.addEventListener("ended", function () {
      pauseBtn.classList.add("hide");
      playBtn.classList.remove("hide");
      video.currentTime = 0;
    });

    // Scroll event to move video forward and backward
    videoPlayer.addEventListener("wheel", function (e) {
      if (e.deltaY > 0) {
        // Scroll down, rewind
        video.currentTime -= 5; // Adjust the rewind duration as needed
      } else {
        // Scroll up, fast forward
        video.currentTime += 5; // Adjust the fast forward duration as needed
      }
    });
  });