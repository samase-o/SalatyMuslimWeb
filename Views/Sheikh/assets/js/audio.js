let audio = document.querySelector('.quranplayer'),
    surahscontainer = document.querySelector('.surahs'),
    ayah = document.querySelector('.ayah'),
    next = document.querySelector('.next'),
    prev = document.querySelector('.prev'),
    play = document.querySelector('.play');
getsurahs();

function getsurahs() {
    fetch('http://api.alquran.cloud/v1/quran/ar.alafasy')
        .then(response => response.json())
        .then(data => {
            data.data.surahs.forEach((surah, index) => {
                surahscontainer.innerHTML += `
                    <div> 
                        <p>${surah.name}</p>
                        <p>${surah.englishName}</p>
                    </div>
                `;
            });

            let allsurahs = document.querySelectorAll('.surahs div');
            let AyahsAudio, AyahsText;

            allsurahs.forEach((surah, index) => {
                surah.addEventListener('click', () => {
                    fetch(`http://api.alquran.cloud/v1/surah/${index + 1}/ar.alafasy`)
                        .then(response => response.json())
                        .then(data => {
                            let ayahs = data.data.ayahs;

                            AyahsAudio = [];
                            AyahsText = [];
                            ayahs.forEach(ayah => {
                                AyahsAudio.push(ayah.audio);
                                AyahsText.push(ayah.text);
                            });

                            let AyahIndex = 0;
                            changeAyah(AyahIndex);

                            audio.addEventListener('ended', () => {
                                AyahIndex++;
                                if (AyahIndex < AyahsAudio.length) {
                                    changeAyah(AyahIndex);
                                } else {
                                    AyahIndex = 0;
                                    changeAyah(AyahIndex);
                                    audio.pause();
                                    alert("The recitation has ended.");
                                    isplaying = false;
                                    toggleplay();
                                }
                            });

                            next.addEventListener('click', () => {
                                AyahIndex < AyahsAudio.length - 1 ? AyahIndex++ : AyahIndex = 0;
                                changeAyah(AyahIndex);
                            });

                            prev.addEventListener('click', () => {
                                AyahIndex === 0 ? AyahIndex = AyahsAudio.length - 1 : AyahIndex--;
                                changeAyah(AyahIndex);
                            });

                            let isplaying = false;
                            toggleplay();

                            function toggleplay() {
                                if (isplaying) {
                                    audio.pause();
                                    play.innerHTML = `<i class="fas fa-play"></i>`;
                                    isplaying = false;
                                } else {
                                    audio.play();
                                    play.innerHTML = `<i class="fas fa-pause"></i>`;
                                    isplaying = true;
                                }
                            }

                            play.addEventListener('click', toggleplay);

                            function changeAyah(index) {
                                audio.src = AyahsAudio[index];
                                ayah.innerHTML = AyahsText[index];
                            }
                        });
                });
            });
        });
}
