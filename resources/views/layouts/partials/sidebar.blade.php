<x-maz-sidebar :href="route('dashboard')" :logo="asset('')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>

    <x-maz-sidebar-item name="Airjet Looms" :link="route('looms_data.index')" icon="bi bi-grid-fill"></x-maz-sidebar-item>


    <x-maz-sidebar-item name="Fetch Loom Data" :link="route('fetch_loom_data')" icon="bi bi-grid-fill"></x-maz-sidebar-item>


    <x-maz-sidebar-item name="Count Wise Shed Effi.Report" :link="route('get_count_wise_shed_report')" icon="bi bi-grid-fill"></x-maz-sidebar-item>



</x-maz-sidebar>
