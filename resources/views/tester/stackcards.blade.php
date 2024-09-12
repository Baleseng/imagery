@extends('layouts.app')
<style type="text/css">

.custom-card-deck {
    margin: 1em 0;
}

.custom-card-deck .mbsc-lv-sl-c {
    max-width: 500px;
    margin: 0 auto;
}

.custom-card-deck .mbsc-lv-v {
    padding-top: 88%;
    min-height: 390px;
}

.custom-card-deck .mbsc-lv-item {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
}

.custom-card-deck .mbsc-lv-item.mbsc-lv-item-swiping {
    z-index: 10;
}

.custom-card-deck .custom-card-rotate-right {
    transform: rotate(1deg);
}

.custom-card-deck .custom-card-rotate-left {
    transform: rotate(-2deg);
}

.custom-card-deck .mbsc-card.custom-card {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
}


</style>

<script type="text/javascript">
mobiscroll.settings = {
    theme: 'ios',
    themeVariant: 'light'
};

mobiscroll.listview('#card-deck', {
    stages: [{
        percent: -20,
        action: function (event, inst) {
            inst.remove(event.target);
            return false;
        }
    }, {
        percent: 20,
        action: function (event, inst) {
            inst.remove(event.target);
            return false;
        }
    }],
    actionable: false
});

mobiscroll.listview('#card-deck-cycle', {
    stages: [{
        percent: -20,
        action: function (event, inst) {
            inst.move(event.target, 0);
            return false;
        }
    }, {
        percent: 20,
        action: function (event, inst) {
            inst.move(event.target, 0);
            return false;
        }
    }],
    actionable: false
});
</script>

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


    
<div class="mbsc-note mbsc-note-primary mbsc-align-center">
    Swipe cards away left or right to clear stack.
</div>

<div class="custom-card-deck">
<ul id="card-deck" class="mbsc-card-list mbsc-cloak">
    <li>
        <div class="custom-card custom-card-rotate-right" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best places to seek silence</div>
                <div class="mbsc-card-subtitle">The Dhamma Giri, a vipassana meditation retreat.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_1.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best animal adventure</div>
                <div class="mbsc-card-subtitle">A young panda tests his climbing skills at the Chengdu Research Base.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_2.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card custom-card-rotate-left" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best places to test your survival skills</div>
                <div class="mbsc-card-subtitle">A view across the Turnagain Arm on Alaska's Kenai Peninsula.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_3.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card custom-card-rotate-right" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Most accessible destinations</div>
                <div class="mbsc-card-subtitle">The impressive Mayan site of Chichén Itzá.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_4.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">The world’s most extraordinary sleepovers</div>
                <div class="mbsc-card-subtitle">Explore the azure depths with a stay at the Manta Resort's underwater room.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_5.png">
            </div>
        </div>
    </li>
</ul>
</div>

<div class="mbsc-note mbsc-note-primary mbsc-align-center">
    Swipe cards away for cyclic movement.
</div>

<div class="custom-card-deck">
<ul id="card-deck-cycle" class="mbsc-card-list mbsc-cloak">
    <li>
        <div class="custom-card custom-card-rotate-right" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best places to seek silence</div>
                <div class="mbsc-card-subtitle">The Dhamma Giri, a vipassana meditation retreat.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_1.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card custom-card-rotate-left" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best animal adventure</div>
                <div class="mbsc-card-subtitle">A young panda tests his climbing skills at the Chengdu Research Base.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_2.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Best places to test your survival skills</div>
                <div class="mbsc-card-subtitle">A view across the Turnagain Arm on Alaska's Kenai Peninsula.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_3.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card custom-card-rotate-right" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">Most accessible destinations</div>
                <div class="mbsc-card-subtitle">The impressive Mayan site of Chichén Itzá.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_4.png">
            </div>
        </div>
    </li>

    <li>
        <div class="custom-card custom-card-rotate-left" mbsc-card>
            <div class="mbsc-card-header">
                <div class="mbsc-card-title">The world’s most extraordinary sleepovers</div>
                <div class="mbsc-card-subtitle">Explore the azure depths with a stay at the Manta Resort's underwater room.</div>
            </div>
            <div class="mbsc-card-content">
                <img draggable="false" src="https://img.mobiscroll.com/demos/card_5.png">
            </div>
        </div>
    </li>
</ul>
</div>

@endsection



