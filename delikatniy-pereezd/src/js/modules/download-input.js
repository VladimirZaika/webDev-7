let downloadInput = document.getElementById('download-input')
let downloadLabel = document.querySelector('.download__label--content')
let clearBtn = document.querySelector('.clear__btn')

function readFile() {
    let file = this.files[0];
  
    let reader = new FileReader();
  
    reader.readAsText(file);
  
    reader.onload = function() {
        downloadLabel.innerHTML = '<span>' + file.name + '(' + file.size/1000 + 'kb' + ')' + '</span>';
    };

    clearBtn.classList.add('active')
}

function cleanInput() {
    downloadInput.value = ""
    downloadLabel.innerHTML = '<span>' + 'Нажмите, чтобы&nbsp;' + '</span>' + '<span class="br mobile">' + 'прикрепить файл' + '</span>';
    clearBtn.classList.remove('active')
}

downloadInput.addEventListener('change', readFile)
clearBtn.addEventListener('click', cleanInput)