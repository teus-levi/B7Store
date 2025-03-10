<div class="password-input-area">
    <input type="password" name="{{$name}}" class="@error($name) is-invalid @enderror"  placeholder="{{$placeholder}}" id="{{$id}}"/>
    <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/Ocultar senha" onclick="togglePasswordVisibility('{{$id}}')"/>
</div>

<script>
    if(typeof togglePasswordVisibility !== 'function'){
        function togglePasswordVisibility(inputId){
            const input = document.getElementById(inputId);
            if(input.type == 'password') {
                input.type = 'text';
            } else {
                input.type = "password";
            }
        }
    }
</script>
