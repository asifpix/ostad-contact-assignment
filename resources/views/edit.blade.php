<x-header title="Create Contact" />
<div id="section-create-form" class="section-create-form mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" value="{{$contact->name}}" placeholder="Enter name">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email" value="{{$contact->email}}" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label for="phone">Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" value="{{$contact->phone}}" placeholder="Enter phone">
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="address">Address</label>
                            <input name="address" type="text" class="form-control" id="address" value="{{$contact->address}}" placeholder="Enter address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-wrap text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<x-footer />