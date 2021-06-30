<a class="data-journal-action-button p-1"
    href="{{ $action == 'journal' ? route('admin.adminEditJournal', ['journal' => $journal]) : route('admin.adminEditConference', ['conference' => $conference])}}">
    <i class="bi bi-pencil"></i>
</a>
<a class="data-journal-action-button p-1"
    href="{{ $action == 'journal' ? route('admin.adminDeleteJournal', ['journal' => $journal]) : route('admin.adminDeleteConference', ['conference' => $conference])}}">
    <i class="bi bi-trash"></i>
</a>