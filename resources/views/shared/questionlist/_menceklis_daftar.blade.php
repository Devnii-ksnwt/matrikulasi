<!-- Menceklis Daftar -->
<div class="kqc">
    <div class="kqc-header">
        <div class="d-flex align-items-center">
            <h5>SOAL {{ $no }}</h5>
            <img src="{{ asset('assets/images/icons/dot.svg') }}" alt="" class="dot-svg">
            <img src="{{ asset('assets/images/icons/types/menceklis-daftar.svg') }}" alt="">
            <p class="ml-2">Menceklis Daftar</p>
        </div>
        <div>
            <a href="#" class="text-decoration-none">
                <img src="{{ asset('assets/images/icons/more.svg') }}" alt="">
            </a>
        </div>
    </div>
    <div class="kqc-body">
        <div class="kqc-question-text editor-display">
            {!! $question['question'] !!}
        </div>

        <div class="kqc-answer-list kqc-answer-list-type-two">
            @foreach($question['choices'] as $key => $choice)
            <div class="kqc-answer-item">
                <div>
                    @if(in_array($key, $question['answer'], true))
                        <img src="{{ asset('assets/images/icons/check-box.svg') }}" alt="">
                    @else
                        <img src="{{ asset('assets/images/icons/check-box-off.svg') }}" alt="">
                    @endif
                </div>
                <div class="editor-display">
                    {!! $choice !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="kqc-footer">
        <h5 class="kqc-footer-title">Pembahasan</h5>
        <div class="kqc-footer-text">
            {!! $question['explanation'] !!}
        </div>
    </div>
</div>