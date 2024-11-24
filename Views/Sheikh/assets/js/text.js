let surahscontainer = document.querySelector('.surahscontainer');



getsurahs()//

function getsurahs() //
{//
    //fetch surah
    fetch("http://api.alquran.cloud/v1/meta")//
        .then(response => response.json())//
        .then(data => {//

            let surahs = data.data.surahs.references;//
            let numberOfSurah = 114;//
            
            surahscontainer.innerHTML ="";//
            for (let i = 0; i < numberOfSurah; i++) {//
                surahscontainer.innerHTML +=  //
                 `               
                <div class="surah">
                        <p>${surahs[i].name}</p>
                        <p>${surahs[i].englishName}</p>
                    </div>`;//
            }//
            let surahTitle = document.querySelectorAll('.surah');
            let popup = document.querySelector('.surah-popup');
             AyatContainer = document.querySelector('.ayat')
             surahTitle.forEach((title, index) =>{
                title.addEventListener('click', () => {
                    fetch(`http://api.alquran.cloud/v1/surah/${index + 1}`)
                    .then(response => response.json())
                    .then(data => {
                        AyatContainer.innerHTML = "";
                        let Ayat = data.data.ayahs;
                        Ayat.forEach(ayah => {
                            
                            popup.classList.add('active');
                            AyatContainer.innerHTML +=
                            `<p>(${ayah.numberInSurah}) - ${ayah.text}</p>`;
                        });
                })
             })
             })
             let closepop = document.querySelector('.close-popup');
            close-popup.addEventListener('click',()=>{
                popup.classList.remove('active');
            })

        })
    }
        
/** 
            
            
                
                    
                        
                      
                            
                            
                           
                                popup.classList.add('active');
                                AyatContainer.innerHTML +=
                                    `<p>(${ayah.numberInSurah}) - ${ayah.text}</p>`;
                           
                        });
                });
            }
        );
        });
}*/
