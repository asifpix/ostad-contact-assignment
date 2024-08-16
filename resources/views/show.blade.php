<x-header title="Contacts" />
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$contact->id}}</th>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->address}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<x-footer />