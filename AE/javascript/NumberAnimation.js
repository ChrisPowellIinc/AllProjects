var EasingCurves = {
	Linear: 0,
	EaseInOut: 1
};

function NumberAnimation()
{
	this.startValue = 0;
	this.endValue = 0;
	this.stepAmount = 0.1;
	this.easingCurve = EasingCurves.Linear;
	this.__step = 0;

	this.step = function()
	{
		this.__step += this.stepAmount;
		if (this.__step > 1)
			this.__step = 1;
	}

	this.reset = function()
	{
		this.__step = 0;
	}

	this.isDone = function()
	{
		return this.__step == 1;
	}

	this.currentValue = function() {
		switch (this.easingCurve) {
			case EasingCurves.EaseInOut:
				return this.__getEaseInOutValueAtStep(this.__step);
				break;
			default:
				return this.__getLinearValueAtStep(this.__step);
		}
	}

	this.__getLinearValueAtStep = function(x)
	{
		return (this.startValue * (1 - x)) + (this.endValue * x);
	}

	this.__getEaseInOutValueAtStep = function(x)
	{
        const a = 2;
        var endWeight = Math.pow(x, a) / (Math.pow(x, a) + Math.pow((1 - x), a));
        var startWeight = 1 - endWeight;
        return (this.startValue * startWeight) + (this.endValue * endWeight);
    }
}