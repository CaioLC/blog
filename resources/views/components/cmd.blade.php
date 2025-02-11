@props([
  'data_user' => '',
  'data_prompt' => 'notKyle@PC',
  'data_continuation_prompt' => '>'
])

<pre
  class="command-line"
  data-prompt={{$data_prompt}}
  data-filter-output="(out)"
  data-continuation-str="\"
  data-continuation-prompt={{$data_continuation_prompt}}
  >
<code class="language-cmd">{{ $slot }}</code>
</pre>
