<x-header title="Contacts" />
{{session('success')}}
<div id="section-contact-list" class="section-contact-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <th scope="row">{{$contact->id}}</th>
                            <td><a href="{{route('contacts.show', $contact->id)}}">{{$contact->name}}</a></td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->address}}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="btn-wrap">
                                        <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-primary">Edit</a>
                                    </div>
                                    <div class="btn-wrap">
                                        <form method="POST" action="{{route('contacts.destroy', $contact->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<x-footer />