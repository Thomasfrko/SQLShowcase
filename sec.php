<li class="protecc"> 
  <label for='protec'> Sécurité: </label>
  <input type="checkbox" id='protec' name='protec' class='secCheckbox' onchange='sec()'>
</li>

<script>
  var checkBox = document.querySelector('.secCheckbox')
  function getCookie(name)
  {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }

  if(getCookie('checkBox') == null) {
    document.cookie = "checkBox = " + checkBox.checked
  } else if(getCookie('checkBox') == 'false') {
    checkBox.checked = false
  } else if (getCookie('checkBox') == 'true') {
    checkBox.checked = true
  }

  function sec() {
    if(checkBox.checked == true) {
      document.cookie = "checkBox = true"
      location.reload(true)
    } else {
      document.cookie = "checkBox = false"
      location.reload(true)
    }
  }
</script>

<style>
  .protecc {
    position: absolute;
    top: 90%;
    left: 3%;
  }

  #protec {
    -webkit-appearance: none;
    -webkit-tap-highlight-color: transparent;
    position: relative;
    border: 0;
    outline: 0;
    cursor: pointer;
    margin: 10px;
  }

  #protec:after {
    content: '';
    width: 60px;
    height: 28px;
    display: inline-block;
    background: rgba(196, 195, 195, 0.55);
    border-radius: 18px;
    clear: both;
  }
  
  #protec:before {
    content: '';
    width: 32px;
    height: 32px;
    display: block;
    position: absolute;
    left: 0;
    top: -3px;
    border-radius: 50%;
    background: rgb(255, 255, 255);
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
  }

  #protec:checked:before {
    left: 32px;
    box-shadow: -1px 1px 3px rgba(0, 0, 0, 0.6);
  }

  #protec:checked:after {
	  background: #16a085;
  }

  #protec,
  #protec:before,
  #protec:after,
  #protec:checked:before,
  #protec:checked:after {
    transition: ease .3s;
    -webkit-transition: ease .3s;
    -moz-transition: ease .3s;
    -o-transition: ease .3s;
  }


  label {
    position: relative;
    color: black;
    bottom: 6px;
  }
</style>