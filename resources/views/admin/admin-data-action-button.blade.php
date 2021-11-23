<div class="d-flex">
    <a class="data-journal-action-button p-1"
    href="{{ $action == 'journal' ? route('admin.adminEditJournal', ['journal' => $journal]) : route('admin.adminEditConference', ['conference' => $conference])}}">
        <i class="bi bi-pencil"></i>
    </a>

    <form action="{{ $action == 'journal' ? route('admin.adminDeleteJournal', ['journal' => $journal]) : route('admin.adminDeleteConference', ['conference' => $conference]) }}" method="post">
        @method('delete')
        @csrf
        <button class="data-journal-action-button p-1" name="delete" type="submit">
            <i class="bi bi-trash"></i>
        </button>
    </form>
</div>

