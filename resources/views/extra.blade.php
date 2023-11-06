@extends('sidebar')

@section('content')
<div class="container">
    <h1>Select Start and End Dates</h1>
    <form>
        <div class="form-group">
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate">
        </div>
        <div class="form-group">
            <label>Select Option:</label>
            <input type="radio" name="radioOption" value="specificDate"> Specific Date
            <input type="radio" name="radioOption" value="noEndDate"> No End Date
        </div>
        <div class="form-group" id="specificDateInput" style="display: none;">
            <label for="endDate">End Date:</label>
            <input type="date" id="endDate">
        </div>
    </form>
</div>

<script>
    const startDateInput = document.getElementById('startDate');
    const specificDateInput = document.getElementById('specificDateInput');
    const endDateInput = document.getElementById('endDate');
    const radioOptions = document.querySelectorAll('input[name="radioOption"]');

    // Listen for changes to the radio buttons.
    radioOptions.forEach(option => {
        option.addEventListener('change', () => {
            if (option.value === 'specificDate') {
                specificDateInput.style.display = 'block';
                endDateInput.setAttribute('required', 'required');
            } else {
                specificDateInput.style.display = 'none';
                endDateInput.removeAttribute('required');
            }
        });
    });

    // Listen for changes to the start date input.
    startDateInput.addEventListener('change', () => {
        // Get the selected start date.
        const selectedStartDate = startDateInput.value;

        // Update the end date input based on the selected start date.
        // Here, you can use JavaScript to calculate or set the end date as desired.
        // For example, you can add a specific number of days to the start date.
        // Let's add 7 days as an example:
        const endDate = new Date(selectedStartDate);
        endDate.setDate(endDate.getDate() + 7); // Adding 7 days to the start date.

        // Format the end date as "YYYY-MM-DD" for the input field.
        const formattedEndDate = endDate.toISOString().split('T')[0];

        // Set the value of the end date input.
        endDateInput.value = formattedEndDate;
    });
</script>
@endsection