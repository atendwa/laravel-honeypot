<fieldset class="hidden">
    <input
        name="{{ config('honeypot.honeypot_input_name') }}"
        type="text"
        maxlength="255"
        hidden
    >

    <input
        name="{{ config('honeypot.honeypot_time_input_name') }}"
        value="{{ microtime(true) }}"
        maxlength="255"
        type="text"
        required
        hidden
    >
</fieldset>
