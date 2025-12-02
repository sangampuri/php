    </main>
    <script>
        function selectOption(element) {
            // Remove selected class from all options
            document.querySelectorAll('.radio-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Add selected class to clicked option
            element.classList.add('selected');
            
            // Check the radio input
            const radioInput = element.querySelector('input[type="radio"]');
            radioInput.checked = true;
        }
    </script>
</body>

</html>