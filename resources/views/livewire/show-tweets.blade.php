<div>
    <h2 class="mt-4">Todos Tweets</h2>
    <hr>
    <table class="table table-dark table-striped">
        <thead>
            <th>Usuário</th>
            <th>Tweet</th>
            <th>Ação</th>
        </thead>
        <tbody>
            @forelse ($tweets as $tweet)
                <tr>
                    <td>{{ $tweet->user->name }}</td>
                    <td>{{ $tweet->content }}</td>
                    <td>
                        n
                    </td>
                </tr>
            @empty
                <td colspan="3" class="text-danger">Nenhum tweet encontrado!</td>
            @endforelse
        </tbody>
    </table>

</div>
