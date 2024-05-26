@extends("layout")

@section("sadrzajStranice")
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email"  class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Subject</label>
            <input type="text" name="subject"  class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <input type="text" name="message"  class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45292.939008455665!2d20.398596525192247!3d44.80508737684253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa0e1f3ad73%3A0xc95e7d097b00ee1a!2sNikola%20Tesla%20Museum!5e0!3m2!1sen!2srs!4v1716721421782!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
