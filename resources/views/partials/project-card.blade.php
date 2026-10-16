{{-- Pemakaian: @include('partials.project-card', ['project' => $project]) --}}
<article class="project-card reveal" data-category="{{ $project->category }}">
    <div class="project-cover" style="--from: {{ $project->color_from }}; --to: {{ $project->color_to }};">
        <span class="project-badge">{{ $project->category }}</span>
        <span class="project-initial" aria-hidden="true">{{ mb_strtoupper(mb_substr($project->title, 0, 1)) }}</span>
    </div>
    <div class="project-body">
        <div class="project-meta">{{ $project->client }} · {{ $project->year }}</div>
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
    </div>
</article>
