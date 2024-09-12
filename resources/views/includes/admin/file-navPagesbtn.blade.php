
<ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-action">
        <a href="{{ url($url) }}" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
            <i class="fa-solid fa-chart-simple mx-2"></i> Dashboard</a>
    </li>
    <li class="list-group-item list-group-item-action">
        <a href="{{ url($url.'/earnings') }}" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
            <i class="fa-solid fa-arrow-trend-up mx-2"></i> Earnings</a>
    </li>
    <li class="list-group-item">
        <a href="{{ url($url.'/portfolio') }}" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
            <i class="fa-solid fa-briefcase mx-2"></i> Portfolio</a>
    </li>
    <li class="list-group-item">
        <a href="{{ url($url.'/insight') }}" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
            <i class="fa-solid fa-lightbulb mx-2"></i> Insight</a>
    </li>
</ul>
