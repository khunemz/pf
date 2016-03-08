
@foreach($blogs as $blog)
    <table class="table table-stripe">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Tag</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->body }}</td>
                <td>{{ $blog->tag}}</td>
                <td>{{ $blog->created_at }}</td>
                <td>{{ $blog->updated_at }}</td>
                <td>
                    <div style="display: inline-block;">
                    <a href="#">Show</a> |<a href="#">Edit</a> | <a href="#">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endforeach