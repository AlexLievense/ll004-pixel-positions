<x-layout>
    <x-page-heading>Create a Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>

        <x-forms.select label="Location" name="location">
            <option>Office</option>
            <option>Remote</option>
            <option>Hybrid</option>
        </x-forms.select>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
