<div class="password-input-area">
    <input type="password" name="{{ $name }}" placeholder="{{ $placeholder }}" @error($name) class="is-invalid" @enderror id="{{ $id }}" />
    <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha" onclick="togglePassword('{{ $id }}')" />
</div>

<script>
    function togglePassword(id) {
        var input = document.getElementById(id);
        input.type === "password" ? input.type = "text" : input.type = "password";
    }
</script>