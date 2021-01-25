<!-- Isian Bahasa -->
<div class="kqc">
    <div class="kqc-header">
        <div class="d-flex align-items-center">
            <h5>SOAL {{ $no }}</h5>
            <img src="{{ asset('assets/images/icons/dot.svg') }}" alt="" class="dot-svg">
            <img src="{{ asset('assets/images/icons/types/isian-bahasa.svg') }}" alt="">
            <p class="ml-2">Isian Bahasa</p>
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

        <div class="kqc-answer-list kqc-answer-list-type-one">
            @foreach ($question['answer'] as $answer)
            <div class="kqc-answer-item">
                <div>
                    <img src="{{ asset('assets/images/icons/check-circle.svg') }}" alt="">
                </div>
                <p>{{ $answer }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="kqc-footer">
        <h5 class="kqc-footer-title">Pembahasan</h5>
        <div class="kqc-footer-text editor-display">
            {!! $question['explanation'] !!}
        </div>
    </div>
</div>