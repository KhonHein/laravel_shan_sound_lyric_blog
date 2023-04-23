<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello-shanni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{  asset('css/user/typing.css')  }}">
</head>
<body class="">

    <div class="container">
    <button class="btn btn-dark mx-auto my-3" onclick="history.back()"><i class="fa-solid fa-left-long" class="backArrow"></i></button>
        <div class="night_mode">
            <div class="toggle_circle"></div>
        </div>
        <div class="change_light_color">
            <div class="colors">
                <input class="colors_input" type="color" >
            </div>
        </div>
        <div>
            <select class="form-control selected-font">
                <option value="ShanNiFont01">Shanni&English01</option>
                <option value="Shanni01">01Shanni</option>
                <option value="english">English</option>
            </select>
        </div>
        <div class="keyboard_wrapp">
            <div class="keyboard_lights"></div>
            <div class="keyboard_keys">
                <div class="row">
                    <div class="keys ShanNiFont01">`</div>
                    <div class="keys ShanNiFont01">1</div>
                    <div class="keys ShanNiFont01">2</div>
                    <div class="keys ShanNiFont01">3</div>
                    <div class="keys ShanNiFont01">4</div>
                    <div class="keys ShanNiFont01">5</div>
                    <div class="keys ShanNiFont01">6</div>
                    <div class="keys ShanNiFont01">7</div>
                    <div class="keys ShanNiFont01">8</div>
                    <div class="keys ShanNiFont01">9</div>
                    <div class="keys ShanNiFont01">0</div>
                    <div class="keys ShanNiFont01">-</div>
                    <div class="keys ShanNiFont01">=</div>
                    <div class="keys backspace_key">Backspace</div>
                </div>
                <div class="row">
                    <div class="keys tab_key">Tab</div>
                    <div class="keys ShanNiFont01">q</div>
                    <div class="keys ShanNiFont01">w</div>
                    <div class="keys ShanNiFont01">e</div>
                    <div class="keys ShanNiFont01">r</div>
                    <div class="keys ShanNiFont01">t</div>
                    <div class="keys ShanNiFont01">y</div>
                    <div class="keys ShanNiFont01">u</div>
                    <div class="keys ShanNiFont01">i</div>
                    <div class="keys ShanNiFont01">o</div>
                    <div class="keys ShanNiFont01">p</div>
                    <div class="keys ShanNiFont01">{</div>
                    <div class="keys ShanNiFont01">}</div>
                    <div class="keys slash_key ShanNiFont01">\</div>
                </div>
                <div class="row">
                    <div class="keys caps_lock_key">Caps Lock</div>
                    <div class="keys ShanNiFont01">a</div>
                    <div class="keys ShanNiFont01">s</div>
                    <div class="keys ShanNiFont01">d</div>
                    <div class="keys ShanNiFont01">f</div>
                    <div class="keys ShanNiFont01">g</div>
                    <div class="keys ShanNiFont01">h</div>
                    <div class="keys ShanNiFont01">j</div>
                    <div class="keys ShanNiFont01">k</div>
                    <div class="keys ShanNiFont01">l</div>
                    <div class="keys ShanNiFont01">;</div>
                    <div class="keys ShanNiFont01">"</div>
                    <div class="keys enter_key">Enter</div>
                </div>
                <div class="row">
                    <div class="keys shift_key shift_left">Shift</div>
                    <div class="keys ShanNiFont01">z</div>
                    <div class="keys ShanNiFont01">x</div>
                    <div class="keys ShanNiFont01">c</div>
                    <div class="keys ShanNiFont01">v</div>
                    <div class="keys ShanNiFont01">b</div>
                    <div class="keys ShanNiFont01">n</div>
                    <div class="keys ShanNiFont01">m</div>
                    <div class="keys ShanNiFont01"><</div>
                    <div class="keys ShanNiFont01">></div>
                    <div class="keys ShanNiFont01">/</div>
                    <div class="keys ShanNiFont01">?</div>
                    <div class="keys shift_key shift_right">Shift</div>
                </div>
                <div class="row">
                    <div class="keys ctrl_key ctrl_left">Ctrl</div>
                    <div class="keys win_key">Win</div>
                    <div class="keys alt_key alt_left">Alt</div>
                    <div class="keys space_key"></div>
                    <div class="keys alt_key alt_right">Alt</div>
                    <div class="keys">Fn</div>
                    <div class="keys ctrl_key ctrl_right">Ctrl</div>
                </div>
            </div>
        </div>
        <input class="text ShanNiFont01" type="text">
    </div>
</body>
<script src="{{ asset('js/user/typing.js') }}"></script>
</html>