var showToast = function(data, time = null) {
    var hasDiv = document.createElement('div')
    hasDiv.style.backgroundColor = 'rgba(0,0,0,.5)'
    hasDiv.style.padding = '10px 20px'
    hasDiv.style.zIndex = '9999'
    hasDiv.style.borderRadius = '8px'
    hasDiv.style.color = '#fff'
    hasDiv.style.fontSize = '15px'
    hasDiv.style.position = 'fixed'
    hasDiv.style.left = '50%'
    hasDiv.style.top = '50%'
    hasDiv.style.width = '60%'
    hasDiv.style.textAlign = 'center'
    hasDiv.style.transform = 'translate(-50%,-50%)'
    hasDiv.innerText = data;
    hasDiv.id = "toastdiv";
    var isShow = document.querySelector('#toastdiv')
    if (isShow) return ;
    setTimeout(() => {
        hasDiv.remove();
    }, time || 2000);
    document.body.appendChild(hasDiv);
}