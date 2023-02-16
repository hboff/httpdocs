<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Mapify - test</title>
<link rel="stylesheet" type="text/css" href="../build/jquery.mapify.css">	
<style type="text/css">

	body{
		font-family: arial, sans-serif;
		font-weight: 400;
		background: #eee;
		font-size: 12px;
		text-align: center;
		margin: 0px;
		padding: 0px;
		cursor: default;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}
	
	/* Mapify custom popOver example */
	
	.mapify-popOver strong{
		font-weight: 400;
		font-size:24px;
		line-height: 1em;
		display: block;
		margin-bottom: 10px;
		color: #000;
	}
	.mapify-popOver{
		color: #999;
		font-size: 16px;
		height: 130px;
	}
	.mapify-popOver-content{
		position: relative;
		top:50%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%);
	}
	
	.mapify-popOver.customPopOver{
		background: #09f;
	}
	
	/* Custom hovering style */
	.mapify-hover{
		fill:rgba(0,0,0,0.15);
		stroke: #fff;
		stroke-width: 2;
	}
	
	.customHover{
		fill:#09f;
		stroke: #fff;
		stroke-width: 2;
	}
	
</style>
</head>
<body>
	
<img src="map.svg" width="578px" height="716px" border="0" usemap="#Map" />

<map name="Map" id="Map">

	<area data-nbmembre="1" alt="Saint-Louis" title="Saint-Louis" href="#" shape="poly" coords="92.394,40.738,
	218.265,178.666,228.589,153.08,225.747,144.878,241.33,128.802,210.934,99.067,211.084,95.177,214.824,86.499,215.273,79.616,
	220.809,70.04,194.924,60.165,196.72,53.881,172.331,48.494,173.229,44.903,150.637,40.738,147.195,52.534,133.878,39.068,
	137.32,28.445,122.657,13.483,92.394,40.738" />

	<area data-nbmembre="2" id="dynamicClassChange" data-hover-class="customHover" alt="Saint-Marcel-de-Richelieu" title="Saint-Marcel-de-Richelieu" href="#" shape="poly" coords="210.934,99.067,
	286.767,173.25,301.339,117.99,315.759,103.126,318.187,103.376,318.817,102.376,321.18,102.778,328.744,94.577,312.025,77.45,
	316.25,61.097,264.438,9.869,252.62,51.902,230.878,42.352,230.829,49.813,227.568,57.111,226.606,62.517,222.036,70.161,
	220.809,70.04,215.273,79.616,214.824,86.499,211.084,95.177" />

	<area data-nbmembre="3" alt="Saint-Hugues" title="Saint-Hugues" href="#" shape="poly" coords="328.744,94.577,
	321.18,102.778,318.817,102.376,318.187,103.376,315.759,103.126,301.339,117.99,286.767,173.25,241.33,128.802,225.747,144.878,
	228.589,153.08,218.265,178.666,222.718,183.316,229.492,167.493,267.202,195.057,256.996,220.479,275.698,240.283,278.8,225.621,
	287.392,217.841,288.525,209.25,292.416,202.767,367.625,275.533,400.255,241.712,375.581,216.026,413.172,178.666" />

	<area data-nbmembre="4" alt="Sainte-Hélène-de-Bagot" title="Sainte-Hélène-de-Bagot" href="#" shape="poly" coords="413.172,178.666,
	375.581,216.026,400.255,241.712,367.625,275.533,471.685,377.561,496.43,260.396" />
	
	<area data-nbmembre="5" alt="Saint-Bernard-de-Michaudville" title="Saint-Bernard-de-Michaudville" href="#" shape="poly" coords="84.018,31.907,
	66.858,108.958,65.002,107.557,65.002,109.916,57.249,102.673,56.299,107.042,46.735,98.122,40.097,115.011,42.818,125.008,
	40.964,126.281,39.131,126.281,34.242,129.178,36.707,130.894,28.793,139.6,25.628,152.508,51.229,179.676,46.438,196.156,
	56.832,209.087,55.432,213.763,56.337,215.092,55.94,219.398,93.146,257.964,102.725,231.837,92.284,220.783,114.225,195.421,
	102.984,185.265,119.168,165.882,135.521,88.301" />
		
	<area data-nbmembre="6" alt="Saint-Jude" title="Saint-Jude" href="#" shape="poly" coords="135.521,88.301,
	119.168,165.882,102.984,185.265,114.225,195.421,92.284,220.783,102.725,231.837,99.637,239.687,154.742,297.091,206.105,246.392,
	222.718,183.316" />
	
	<area data-nbmembre="7" alt="Saint-Barnabé-Sud" title="Saint-Barnabé-Sud" href="#" shape="poly" coords="275.698,240.283,
	256.996,220.479,267.202,195.057,229.492,167.493,222.718,183.316,222.718,183.316,206.105,246.392,154.742,297.091,
	204.64,349.526,223.706,331.134,236.01,344.036,238.036,335.841,247.275,324.171,263.322,286.972,263.564,275.533,273.776,268.737,
	272.561,257.492,275.698,247.182" />
	
	<area data-nbmembre="8" alt="Saint-Simon" title="Saint-Simon" href="#" shape="poly" coords="343.138,395.166,
	254.515,307.365,263.442,286.67,263.685,275.231,273.897,268.435,272.681,257.189,275.82,246.88,275.82,239.981,278.922,225.319,
	287.512,217.539,288.646,208.949,292.537,202.465,401.027,308.753,353.623,355.406,360.437,362.056,336.45,383.816,
	343.856,392.709" />
	
	<area data-nbmembre="9" data-group-id="group-1" alt="Saint-Liboire" title="Saint-Liboire" href="#" shape="poly" coords="471.685,377.561,
	401.027,308.753,353.623,355.406,360.437,362.056,336.45,383.816,343.856,392.709,343.138,395.166,381.174,430.486,
	367.606,464.853,394.408,491.211,403.571,454.546,445.743,492.588" />
	
	<area data-nbmembre="10" alt="La Présentation" title="La Présentation" href="#" shape="poly" coords="99.637,239.687,
	77.451,302.156,60.928,286.535,53.542,298.639,44.533,309.719,36.509,334.71,33.808,346.799,32.42,358.902,32.445,370.669,
	49.723,388.8,52.036,464.403,105.598,481.809,108.501,434.06,121.16,433.101,121.16,427.208,130.167,404.89,131.865,378.524,
	143.032,352.583,148.698,344.874,149.138,340.005,153.342,330.887,152.918,316.866,160.268,302.848" />
	
	<area data-nbmembre="11" data-group-id="group-1" alt="Saint-Hyacinthe" title="Saint-Hyacinthe" href="#" shape="poly" coords="160.268,302.848,
	152.918,316.866,153.342,330.887,149.138,340.005,148.698,344.874,143.458,351.402,131.865,378.524,130.167,404.89,121.16,427.208,
	121.16,433.101,108.501,434.06,105.598,481.809,156.726,481.562,164.103,488.712,159.409,495.683,158.94,510.556,155.645,527.59,
	149.941,528.083,150.53,530.878,155.078,534.765,155.652,538.653,179.174,542.956,175.875,526.457,192.229,542.608,
	202.717,527.021,207.271,528.591,208.616,528.943,227.695,547.277,262.391,514.628,265.85,518.051,298.983,483.555,
	307.889,493.557,345.658,398.081,254.515,307.365,247.275,324.171,238.036,335.841,236.01,344.036,223.706,331.134,204.64,349.526" />
	
	<area data-nbmembre="12" alt="Saint-Dominique" title="Saint-Dominique" href="#" shape="poly" coords="265.85,518.051,
	364.091,619.145,373.192,576.105,394.408,491.211,367.606,464.853,381.174,430.486,345.658,398.081,307.889,493.557,
	298.983,483.555" />
	
	<area data-nbmembre="13" alt="Saint-Valérien-de-Milton" title="Saint-Valérien-de-Milton" href="#" shape="poly" coords="403.571,454.546,
	373.192,576.105,403.331,573.86,403.551,595.768,490.766,595.208,490.896,583.841,506.805,584.137,506.188,573.243,
	566.775,572.889,569.971,472.58,469.392,472.25,469.392,483.589,447.424,485.135,445.743,492.588" />
			
	<area data-nbmembre="14" alt="Sainte-Marie-Madeleine" title="Sainte-Marie-Madeleine" href="#" shape="poly" coords="156.726,481.562,
	104.881,481.809,68.244,469.742,64.651,517.601,55.308,514.317,55.308,515.958,48.354,509.175,50.875,491.717,41.328,494.037,
	38.081,476.704,50.167,470.969,50.196,468.12,50.442,467.623,41.985,456.723,40.448,461.219,16.583,434.988,15.607,443.866,
	8.159,464.411,10.057,477.56,15.188,488.496,21.687,499.725,15.791,503.825,12.85,499.813,9.567,523.227,27.146,539.418,
	27.766,534.43,47.141,551.94,49.688,534.396,47.372,528.129,95.146,579.431,98.721,531.204,155.645,527.59,158.94,510.556,
	159.409,495.683,164.103,488.712" />
	
	<area data-nbmembre="15" alt="Sainte-Madeleine" title="Sainte-Madeleine" href="#" shape="poly" coords="64.651,517.601,
	55.308,514.317,55.308,515.958,48.354,509.175,50.875,491.717,41.328,494.037,38.081,476.704,50.167,470.969,50.196,468.12,
	52.036,464.403,68.244,469.742" />
	
	<area data-nbmembre="16" alt="Saint-Damase" title="Saint-Damase" href="#" shape="poly" coords="91.962,576.011,
	95.146,579.431,98.721,531.204,149.941,528.083,150.53,530.878,155.078,534.765,155.652,538.653,179.174,542.956,184.628,551.742,
	193.381,555.632,196.622,561.467,200.188,566.98,200.188,575.083,205.375,578,211.21,587.403,216.721,587.403,221.033,597.145,
	221.237,599.546,213.277,598.665,206.124,617.011,211.246,618.463,205.157,629.675,200.955,652.076,198.62,655.802,
	202.341,662.612,198.655,667.934,200.956,669.805,199.958,671.716,154.284,667.583,150.735,673.272,122.053,648.809,
	115.772,669.562,81.46,672.269,91.515,645.336,74.551,626.553" />
	
	<area data-nbmembre="17" alt="Saint-Pie" title="Saint-Pie" href="#" shape="poly" coords="364.091,619.145,
	262.391,514.628,227.695,547.277,208.616,528.943,202.717,527.021,192.229,542.608,175.875,526.457,178.793,542.341,
	184.628,551.742,193.381,555.632,196.622,561.467,200.188,566.98,200.188,575.083,205.375,578,211.21,587.403,216.721,587.403,
	221.033,597.145,221.237,599.546,213.277,598.665,206.124,617.011,211.246,618.463,205.157,629.675,200.955,652.076,
	198.62,655.802,202.341,662.612,198.655,667.934,200.956,669.805,199.958,671.716,203.411,671.785,204.648,673.825,
	204.159,676.997,200.02,683.05,200.934,693.083,198.237,700.689,239.196,706.256,242.976,686.137,260.651,688.542,262.596,678.258,
	269.812,666.303,287.596,682.226,292.918,673.658,301.885,669.566,312.308,669.127,320.902,670.042,332.862,673.32,
	334.167,671.021,355.871,675.006" />	
	
</map>

<img src="map.svg" width="578px" height="716px" border="0" usemap="#Map2" />
	
<map name="Map2" id="Map2">

	<area data-nbmembre="1" alt="Saint-Louis" title="Saint-Louis" href="#" shape="poly" coords="92.394,40.738,
	218.265,178.666,228.589,153.08,225.747,144.878,241.33,128.802,210.934,99.067,211.084,95.177,214.824,86.499,215.273,79.616,
	220.809,70.04,194.924,60.165,196.72,53.881,172.331,48.494,173.229,44.903,150.637,40.738,147.195,52.534,133.878,39.068,
	137.32,28.445,122.657,13.483,92.394,40.738" />

	<area data-nbmembre="2" data-pop-over-class="customPopOver" alt="Saint-Marcel-de-Richelieu" title="Saint-Marcel-de-Richelieu" href="#" shape="poly" coords="210.934,99.067,
	286.767,173.25,301.339,117.99,315.759,103.126,318.187,103.376,318.817,102.376,321.18,102.778,328.744,94.577,312.025,77.45,
	316.25,61.097,264.438,9.869,252.62,51.902,230.878,42.352,230.829,49.813,227.568,57.111,226.606,62.517,222.036,70.161,
	220.809,70.04,215.273,79.616,214.824,86.499,211.084,95.177" />

	<area data-nbmembre="3" alt="Saint-Hugues" title="Saint-Hugues" href="#" shape="poly" coords="328.744,94.577,
	321.18,102.778,318.817,102.376,318.187,103.376,315.759,103.126,301.339,117.99,286.767,173.25,241.33,128.802,225.747,144.878,
	228.589,153.08,218.265,178.666,222.718,183.316,229.492,167.493,267.202,195.057,256.996,220.479,275.698,240.283,278.8,225.621,
	287.392,217.841,288.525,209.25,292.416,202.767,367.625,275.533,400.255,241.712,375.581,216.026,413.172,178.666" />

	<area data-nbmembre="4" alt="Sainte-Hélène-de-Bagot" title="Sainte-Hélène-de-Bagot" href="#" shape="poly" coords="413.172,178.666,
	375.581,216.026,400.255,241.712,367.625,275.533,471.685,377.561,496.43,260.396" />
	
	<area data-nbmembre="5" alt="Saint-Bernard-de-Michaudville" title="Saint-Bernard-de-Michaudville" href="#" shape="poly" coords="84.018,31.907,
	66.858,108.958,65.002,107.557,65.002,109.916,57.249,102.673,56.299,107.042,46.735,98.122,40.097,115.011,42.818,125.008,
	40.964,126.281,39.131,126.281,34.242,129.178,36.707,130.894,28.793,139.6,25.628,152.508,51.229,179.676,46.438,196.156,
	56.832,209.087,55.432,213.763,56.337,215.092,55.94,219.398,93.146,257.964,102.725,231.837,92.284,220.783,114.225,195.421,
	102.984,185.265,119.168,165.882,135.521,88.301" />
		
	<area data-nbmembre="6" alt="Saint-Jude" title="Saint-Jude" href="#" shape="poly" coords="135.521,88.301,
	119.168,165.882,102.984,185.265,114.225,195.421,92.284,220.783,102.725,231.837,99.637,239.687,154.742,297.091,206.105,246.392,
	222.718,183.316" />
	
	<area data-nbmembre="7" alt="Saint-Barnabé-Sud" title="Saint-Barnabé-Sud" href="#" shape="poly" coords="275.698,240.283,
	256.996,220.479,267.202,195.057,229.492,167.493,222.718,183.316,222.718,183.316,206.105,246.392,154.742,297.091,
	204.64,349.526,223.706,331.134,236.01,344.036,238.036,335.841,247.275,324.171,263.322,286.972,263.564,275.533,273.776,268.737,
	272.561,257.492,275.698,247.182" />
	
	<area data-nbmembre="8" alt="Saint-Simon" title="Saint-Simon" href="#" shape="poly" coords="343.138,395.166,
	254.515,307.365,263.442,286.67,263.685,275.231,273.897,268.435,272.681,257.189,275.82,246.88,275.82,239.981,278.922,225.319,
	287.512,217.539,288.646,208.949,292.537,202.465,401.027,308.753,353.623,355.406,360.437,362.056,336.45,383.816,
	343.856,392.709" />
	
	<area data-nbmembre="9" alt="Saint-Liboire" title="Saint-Liboire" href="#" shape="poly" coords="471.685,377.561,
	401.027,308.753,353.623,355.406,360.437,362.056,336.45,383.816,343.856,392.709,343.138,395.166,381.174,430.486,
	367.606,464.853,394.408,491.211,403.571,454.546,445.743,492.588" />
	
	<area data-nbmembre="10" alt="La Présentation" title="La Présentation" href="#" shape="poly" coords="99.637,239.687,
	77.451,302.156,60.928,286.535,53.542,298.639,44.533,309.719,36.509,334.71,33.808,346.799,32.42,358.902,32.445,370.669,
	49.723,388.8,52.036,464.403,105.598,481.809,108.501,434.06,121.16,433.101,121.16,427.208,130.167,404.89,131.865,378.524,
	143.032,352.583,148.698,344.874,149.138,340.005,153.342,330.887,152.918,316.866,160.268,302.848" />
	
	<area data-nbmembre="11" alt="Saint-Hyacinthe" title="Saint-Hyacinthe" href="#" shape="poly" coords="160.268,302.848,
	152.918,316.866,153.342,330.887,149.138,340.005,148.698,344.874,143.458,351.402,131.865,378.524,130.167,404.89,121.16,427.208,
	121.16,433.101,108.501,434.06,105.598,481.809,156.726,481.562,164.103,488.712,159.409,495.683,158.94,510.556,155.645,527.59,
	149.941,528.083,150.53,530.878,155.078,534.765,155.652,538.653,179.174,542.956,175.875,526.457,192.229,542.608,
	202.717,527.021,207.271,528.591,208.616,528.943,227.695,547.277,262.391,514.628,265.85,518.051,298.983,483.555,
	307.889,493.557,345.658,398.081,254.515,307.365,247.275,324.171,238.036,335.841,236.01,344.036,223.706,331.134,204.64,349.526" />
	
	<area data-nbmembre="12" alt="Saint-Dominique" title="Saint-Dominique" href="#" shape="poly" coords="265.85,518.051,
	364.091,619.145,373.192,576.105,394.408,491.211,367.606,464.853,381.174,430.486,345.658,398.081,307.889,493.557,
	298.983,483.555" />
	
	<area data-nbmembre="13" alt="Saint-Valérien-de-Milton" title="Saint-Valérien-de-Milton" href="#" shape="poly" coords="403.571,454.546,
	373.192,576.105,403.331,573.86,403.551,595.768,490.766,595.208,490.896,583.841,506.805,584.137,506.188,573.243,
	566.775,572.889,569.971,472.58,469.392,472.25,469.392,483.589,447.424,485.135,445.743,492.588" />
			
	<area data-nbmembre="14" alt="Sainte-Marie-Madeleine" title="Sainte-Marie-Madeleine" href="#" shape="poly" coords="156.726,481.562,
	104.881,481.809,68.244,469.742,64.651,517.601,55.308,514.317,55.308,515.958,48.354,509.175,50.875,491.717,41.328,494.037,
	38.081,476.704,50.167,470.969,50.196,468.12,50.442,467.623,41.985,456.723,40.448,461.219,16.583,434.988,15.607,443.866,
	8.159,464.411,10.057,477.56,15.188,488.496,21.687,499.725,15.791,503.825,12.85,499.813,9.567,523.227,27.146,539.418,
	27.766,534.43,47.141,551.94,49.688,534.396,47.372,528.129,95.146,579.431,98.721,531.204,155.645,527.59,158.94,510.556,
	159.409,495.683,164.103,488.712" />
	
	<area data-nbmembre="15" alt="Sainte-Madeleine" title="Sainte-Madeleine" href="#" shape="poly" coords="64.651,517.601,
	55.308,514.317,55.308,515.958,48.354,509.175,50.875,491.717,41.328,494.037,38.081,476.704,50.167,470.969,50.196,468.12,
	52.036,464.403,68.244,469.742" />
	
	<area data-nbmembre="16" alt="Saint-Damase" title="Saint-Damase" href="#" shape="poly" coords="91.962,576.011,
	95.146,579.431,98.721,531.204,149.941,528.083,150.53,530.878,155.078,534.765,155.652,538.653,179.174,542.956,184.628,551.742,
	193.381,555.632,196.622,561.467,200.188,566.98,200.188,575.083,205.375,578,211.21,587.403,216.721,587.403,221.033,597.145,
	221.237,599.546,213.277,598.665,206.124,617.011,211.246,618.463,205.157,629.675,200.955,652.076,198.62,655.802,
	202.341,662.612,198.655,667.934,200.956,669.805,199.958,671.716,154.284,667.583,150.735,673.272,122.053,648.809,
	115.772,669.562,81.46,672.269,91.515,645.336,74.551,626.553" />
	
	<area data-nbmembre="17" alt="Saint-Pie" title="Saint-Pie" href="#" shape="poly" coords="364.091,619.145,
	262.391,514.628,227.695,547.277,208.616,528.943,202.717,527.021,192.229,542.608,175.875,526.457,178.793,542.341,
	184.628,551.742,193.381,555.632,196.622,561.467,200.188,566.98,200.188,575.083,205.375,578,211.21,587.403,216.721,587.403,
	221.033,597.145,221.237,599.546,213.277,598.665,206.124,617.011,211.246,618.463,205.157,629.675,200.955,652.076,
	198.62,655.802,202.341,662.612,198.655,667.934,200.956,669.805,199.958,671.716,203.411,671.785,204.648,673.825,
	204.159,676.997,200.02,683.05,200.934,693.083,198.237,700.689,239.196,706.256,242.976,686.137,260.651,688.542,262.596,678.258,
	269.812,666.303,287.596,682.226,292.918,673.658,301.885,669.566,312.308,669.127,320.902,670.042,332.862,673.32,
	334.167,671.021,355.871,675.006" />	
	
</map>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
<script type="text/javascript" src="../build/jquery.mapify.js"></script>

<script type="text/javascript">
$(function(){
	
	$("img[usemap]:first").mapify({
		hoverClass: "drop-hover"
	});
	
	$("img[usemap]:last").mapify({
		popOver: {
			content: function(zone){
				return "<strong>"+zone.attr("data-title")+"</strong>"+zone.attr("data-nbmembre")+" Members";
			},
			delay: 0.7,
			margin: "15px",
			height: "130px",
			width: "260px"
		},
		onAreaHighlight: function(){
			console.log("onAreaHighlight callback");
		},
		onMapClear: function(){
			console.log("onMapClear callback");
		}
	});
	
	$("#dynamicClassChange").click(function() {
		$(this).attr("data-hover-class","hover-green");
	});
	
});
</script>
</body>
</html>