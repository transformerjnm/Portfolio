<!-- 
Creator: Jacob Mitchell
Date of creation: 11/26/2018
name: BMX Website
Purpouse: A website that can be maintained easily. While providing ever need of the organization.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- font awsome link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Peachtree City BMX - Sizing Chart</title>
	<meta name="description" content="Peachtree City(PTC) BMX sizing charts. Find the proper bike frame length/size, crank length, wheel size, rollout/ rear tire size, and Gear chart for you.">
	<?php include 'update.php'; ?>
	<style type="text/css">
	   <?php 
	   if ($alert == ""){
	       ?>
	       .noshow{
	           display: none; 
	       }<?php 
	   }
	   ?>
	</style>
	
</head>
<!--- body dose not have gray color so that you can see the gray hover on table -->

<body>
	<header>
		<!-- php alert system -->
		<div class="navbar-fixed alert noshow">
			<nav class=" maincolor z-depth-4 alert valign-wrapper">		
					<?php echo $alert ?>									
			</nav>
		</div>
		<div class="navbar-fixed">
			<nav class=" maincolor z-depth-4 ">
				<div class="nav-wrapper">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="flow-text hide-on-med-and-down">
						<li class="bold"><a href="index.php">Home</a></li>
						<li class="bold"><a href="newrider.php">New Rider</a></li>
						<li class="bold"><a href="visitus.php">Visit Us</a></li>
						<li class="bold"><a href="schedule.php">Schedule</a></li>
						<li class="bold"><a href="results.php">Results</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- mobile slide menu navigation -->
		<ul class="z-depth-5 sidenavfix side-nav" id="mobile-demo">
			<li><a href="index.php">Home</a></li>
			<li><a href="newrider.php">New Rider</a></li>
			<li><a href="visitus.php">Visit Us</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="results.php">Results</a></li>
		</ul>
		<div class="z-depth-1 center secondarycolor">
			<img class="responsive-img" src="images/header3.png" alt="BMX Header Image">
		</div>
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Sizing Chart</h3>
			</div>
		</div>
	</header>
	<main>
		<div class="container section">
			<h3 class="bold center secondarycolor">Rider Size and Bike Frame</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Rider Height</th>
						<th>Frame Size</th>
						<th>Top Tube</th>
						<th>Stem</th>
						<th>Bar Rise</th>
						<th>Bar Width</th>
						<th>Cranks</th>
						<th>Gearing</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>4 &amp; under</td>
						<td>Micro-Mini</td>
						<td>15-16</td>
						<td>Mini</td>
						<td>2-2.5</td>
						<td>20-22.5</td>
						<td>150-160mm</td>
						<td>41-43/16</td>
					</tr>
					<tr>
						<td>4-4.6</td>
						<td>Mini</td>
						<td>16-17</td>
						<td>Mini-Mini XL</td>
						<td>2-3.5</td>
						<td>21-23.5</td>
						<td>155-165mm</td>
						<td>41-43/16</td>
					</tr>
					<tr>
						<td>4.4-4.10</td>
						<td>Junior</td>
						<td>17-18.5</td>
						<td>Mini XL-Pro</td>
						<td>3-5</td>
						<td>22-25</td>
						<td>160mm-175mm</td>
						<td>42-43/16</td>
					</tr>
					<tr>
						<td>4.8-5.4</td>
						<td>Expert</td>
						<td>18.5-19.5</td>
						<td>Pro</td>
						<td>5-7</td>
						<td>25.5-27</td>
						<td>170mm-175mm</td>
						<td>42-43/16</td>
					</tr>
					<tr>
						<td>5.4-5.10</td>
						<td>Pro</td>
						<td>20-20.5</td>
						<td>Pro-Pro XL</td>
						<td>7-8</td>
						<td>27-28</td>
						<td>175mm-180mm</td>
						<td>43-44/16</td>
					</tr>
					<tr>
						<td>5.10 &amp; over</td>
						<td>Pro XL-XXL</td>
						<td>20.5 &amp; Over</td>
						<td>Pro XL-XXL</td>
						<td>7-8</td>
						<td>28.5(max)</td>
						<td>180mm-185mm</td>
						<td>44/16 &amp; Over</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">Crank Length</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Riders Inseam</th>
						<th>Crank Length</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>20</td>
						<td>140mm</td>
					</tr>
					<tr>
						<td>21</td>
						<td>145mm</td>
					</tr>
					<tr>
						<td>22</td>
						<td>150mm</td>
					</tr>
					<tr>
						<td>23</td>
						<td>155mm</td>
					</tr>
					<tr>
						<td>24</td>
						<td>160mm</td>
					</tr>
					<tr>
						<td>25</td>
						<td>162mm</td>
					</tr>
					<tr>
						<td>26</td>
						<td>166mm</td>
					</tr>
					<tr>
						<td>27</td>
						<td>171mm</td>
					</tr>
					<tr>
						<td>28</td>
						<td>175mm</td>
					</tr>
					<tr>
						<td>29</td>
						<td>177mm</td>
					</tr>
					<tr>
						<td>30</td>
						<td>180mm</td>
					</tr>
					<tr>
						<td>31</td>
						<td>182mm</td>
					</tr>
					<tr>
						<td>32</td>
						<td>185mm</td>
					</tr>
					<tr>
						<td>33</td>
						<td>190mm</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">Wheel Size</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Max Rider Weight</th>
						<th>65 lbs</th>
						<th>90 lbs</th>
						<th>120 lbs</th>
						<th>150 lbs</th>
						<th>140 lbs</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Rim Width</td>
						<td>1.00</td>
						<td>1 1/8</td>
						<td>1 3/8</td>
						<td>1.50</td>
						<td>1.75</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">Rollout and Rear Tire Size in Inches</h3>
			<h3 class="bold center secondarycolor">20 X 1.75 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>47.4</td>
						<td>44.3</td>
						<td>41.5</td>
						<td>39.0</td>
						<td>36.8</td>
					</tr>
					<tr>
						<td>35</td>
						<td>48.7</td>
						<td>45.4</td>
						<td>42.7</td>
						<td>40.2</td>
						<td>37.8</td>
					</tr>
					<tr>
						<td>36</td>
						<td>50.2</td>
						<td>46.0</td>
						<td>43.6</td>
						<td>41.3</td>
						<td>39.0</td>
					</tr>
					<tr>
						<td>37</td>
						<td>51.6</td>
						<td>48.1</td>
						<td>45.1</td>
						<td>42.5</td>
						<td>40.1</td>
					</tr>
					<tr>
						<td>38</td>
						<td>53.0</td>
						<td>49.4</td>
						<td>46.3</td>
						<td>43.6</td>
						<td>41.2</td>
					</tr>
					<tr>
						<td>39</td>
						<td>54.4</td>
						<td>50.7</td>
						<td>47.5</td>
						<td>44.7</td>
						<td>42.3</td>
					</tr>
					<tr>
						<td>40</td>
						<td>55.7</td>
						<td>52.0</td>
						<td>48.8</td>
						<td>45.9</td>
						<td>43.3</td>
					</tr>
					<tr>
						<td>41</td>
						<td>57.1</td>
						<td>53.3</td>
						<td>50.0</td>
						<td>47.0</td>
						<td>44.4</td>
					</tr>
					<tr>
						<td>42</td>
						<td>58.5</td>
						<td>54.6</td>
						<td>51.2</td>
						<td>48.2</td>
						<td>45.5</td>
					</tr>
					<tr>
						<td>43</td>
						<td>59.9</td>
						<td>55.9</td>
						<td>52.4</td>
						<td>49.4</td>
						<td>46.6</td>
					</tr>
					<tr>
						<td>44</td>
						<td>61.9</td>
						<td>57.2</td>
						<td>53.7</td>
						<td>50.5</td>
						<td>47.7</td>
					</tr>
					<tr>
						<td>45</td>
						<td>62.7</td>
						<td>58.5</td>
						<td>54.9</td>
						<td>51.7</td>
						<td>48.8</td>
					</tr>
					<tr>
						<td>46</td>
						<td>64.1</td>
						<td>59.8</td>
						<td>56.1</td>
						<td>52.8</td>
						<td>49.9</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">20 X 1.50 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>46.8</td>
						<td>43.6</td>
						<td>40.9</td>
						<td>38.5</td>
						<td>36.4</td>
					</tr>
					<tr>
						<td>35</td>
						<td>48.1</td>
						<td>44.9</td>
						<td>42.1</td>
						<td>49.6</td>
						<td>37.4</td>
					</tr>
					<tr>
						<td>36</td>
						<td>49.5</td>
						<td>46.2</td>
						<td>43.3</td>
						<td>40.8</td>
						<td>38.5</td>
					</tr>
					<tr>
						<td>37</td>
						<td>50.9</td>
						<td>47.4</td>
						<td>44.5</td>
						<td>41.9</td>
						<td>39.6</td>
					</tr>
					<tr>
						<td>38</td>
						<td>52.3</td>
						<td>48.8</td>
						<td>45.7</td>
						<td>43.1</td>
						<td>40.6</td>
					</tr>
					<tr>
						<td>39</td>
						<td>53.6</td>
						<td>50.1</td>
						<td>46.9</td>
						<td>44.1</td>
						<td>41.7</td>
					</tr>
					<tr>
						<td>40</td>
						<td>55.0</td>
						<td>51.3</td>
						<td>48.1</td>
						<td>45.2</td>
						<td>43.8</td>
					</tr>
					<tr>
						<td>41</td>
						<td>56.4</td>
						<td>52.8</td>
						<td>49.3</td>
						<td>46.4</td>
						<td>43.9</td>
					</tr>
					<tr>
						<td>42</td>
						<td>57.5</td>
						<td>53.9</td>
						<td>50.5</td>
						<td>47.5</td>
						<td>44.9</td>
					</tr>
					<tr>
						<td>43</td>
						<td>59.1</td>
						<td>55.2</td>
						<td>51.7</td>
						<td>48.7</td>
						<td>46.0</td>
					</tr>
					<tr>
						<td>44</td>
						<td>60.5</td>
						<td>56.5</td>
						<td>52.9</td>
						<td>49.8</td>
						<td>47.0</td>
					</tr>
					<tr>
						<td>45</td>
						<td>61.8</td>
						<td>57.7</td>
						<td>54.1</td>
						<td>51.0</td>
						<td>48.1</td>
					</tr>
					<tr>
						<td>46</td>
						<td>63.2</td>
						<td>59.1</td>
						<td>55.3</td>
						<td>52.2</td>
						<td>49.2</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">20 X 1 3/8 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>51.0</td>
						<td>47.6</td>
						<td>44.6</td>
						<td>42.0</td>
						<td>39.7</td>
					</tr>
					<tr>
						<td>35</td>
						<td>52.5</td>
						<td>49.0</td>
						<td>45.9</td>
						<td>43.2</td>
						<td>40.7</td>
					</tr>
					<tr>
						<td>36</td>
						<td>54.0</td>
						<td>50.4</td>
						<td>47.3</td>
						<td>44.5</td>
						<td>42.0</td>
					</tr>
					<tr>
						<td>37</td>
						<td>55.5</td>
						<td>51.6</td>
						<td>48.6</td>
						<td>45.7</td>
						<td>43.2</td>
					</tr>
					<tr>
						<td>38</td>
						<td>57.0</td>
						<td>53.2</td>
						<td>49.9</td>
						<td>47.0</td>
						<td>44.4</td>
					</tr>
					<tr>
						<td>39</td>
						<td>58.5</td>
						<td>54.6</td>
						<td>51.2</td>
						<td>48.2</td>
						<td>45.5</td>
					</tr>
					<tr>
						<td>40</td>
						<td>60.0</td>
						<td>56.0</td>
						<td>52.5</td>
						<td>49.4</td>
						<td>46.7</td>
					</tr>
					<tr>
						<td>41</td>
						<td>61.5</td>
						<td>57.4</td>
						<td>53.9</td>
						<td>50.7</td>
						<td>47.9</td>
					</tr>
					<tr>
						<td>42</td>
						<td>63.0</td>
						<td>58.8</td>
						<td>55.2</td>
						<td>51.9</td>
						<td>49.0</td>
					</tr>
					<tr>
						<td>43</td>
						<td>64.5</td>
						<td>60.2</td>
						<td>56.5</td>
						<td>53.2</td>
						<td>50.2</td>
					</tr>
					<tr>
						<td>44</td>
						<td>66.0</td>
						<td>61.6</td>
						<td>57.8</td>
						<td>54.4</td>
						<td>51.4</td>
					</tr>
					<tr>
						<td>45</td>
						<td>67.5</td>
						<td>63.0</td>
						<td>59.1</td>
						<td>55.6</td>
						<td>52.5</td>
					</tr>
					<tr>
						<td>46</td>
						<td>69.0</td>
						<td>64.4</td>
						<td>60.4</td>
						<td>56.9</td>
						<td>53.7</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">20 X 1 1/8 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>48.6</td>
						<td>45.3</td>
						<td>42.5</td>
						<td>40.0</td>
						<td>37.7</td>
					</tr>
					<tr>
						<td>35</td>
						<td>50.0</td>
						<td>46.7</td>
						<td>43.8</td>
						<td>41.2</td>
						<td>38.8</td>
					</tr>
					<tr>
						<td>36</td>
						<td>51.4</td>
						<td>48.0</td>
						<td>45.0</td>
						<td>42.3</td>
						<td>40.0</td>
					</tr>
					<tr>
						<td>37</td>
						<td>52.8</td>
						<td>49.3</td>
						<td>46.2</td>
						<td>43.5</td>
						<td>41.1</td>
					</tr>
					<tr>
						<td>38</td>
						<td>54.3</td>
						<td>50.7</td>
						<td>47.5</td>
						<td>44.7</td>
						<td>42.2</td>
					</tr>
					<tr>
						<td>39</td>
						<td>55.7</td>
						<td>52.0</td>
						<td>48.7</td>
						<td>45.9</td>
						<td>43.3</td>
					</tr>
					<tr>
						<td>40</td>
						<td>57.1</td>
						<td>53.3</td>
						<td>50.0</td>
						<td>47.0</td>
						<td>44.4</td>
					</tr>
					<tr>
						<td>41</td>
						<td>58.6</td>
						<td>54.7</td>
						<td>51.2</td>
						<td>48.2</td>
						<td>45.6</td>
					</tr>
					<tr>
						<td>42</td>
						<td>60.0</td>
						<td>56.0</td>
						<td>52.5</td>
						<td>49.4</td>
						<td>46.7</td>
					</tr>
					<tr>
						<td>43</td>
						<td>61.4</td>
						<td>57.3</td>
						<td>53.7</td>
						<td>50.6</td>
						<td>47.8</td>
					</tr>
					<tr>
						<td>44</td>
						<td>62.8</td>
						<td>58.7</td>
						<td>55.0</td>
						<td>51.8</td>
						<td>48.9</td>
					</tr>
					<tr>
						<td>45</td>
						<td>64.3</td>
						<td>60.0</td>
						<td>56.2</td>
						<td>52.9</td>
						<td>50.0</td>
					</tr>
					<tr>
						<td>46</td>
						<td>65.7</td>
						<td>61.3</td>
						<td>57.5</td>
						<td>54.1</td>
						<td>51.1</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">24 X 1.75 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>58.3</td>
						<td>54.4</td>
						<td>51.0</td>
						<td>48.0</td>
						<td>45.3</td>
					</tr>
					<tr>
						<td>35</td>
						<td>60.0</td>
						<td>56.0</td>
						<td>52.5</td>
						<td>49.4</td>
						<td>46.5</td>
					</tr>
					<tr>
						<td>36</td>
						<td>61.7</td>
						<td>57.6</td>
						<td>54.0</td>
						<td>50.0</td>
						<td>48.0</td>
					</tr>
					<tr>
						<td>37</td>
						<td>63.3</td>
						<td>59.3</td>
						<td>55.5</td>
						<td>52.2</td>
						<td>49.4</td>
					</tr>
					<tr>
						<td>38</td>
						<td>65.0</td>
						<td>60.7</td>
						<td>57.0</td>
						<td>53.6</td>
						<td>50.7</td>
					</tr>
					<tr>
						<td>39</td>
						<td>66.9</td>
						<td>62.4</td>
						<td>58.5</td>
						<td>55.1</td>
						<td>52.0</td>
					</tr>
					<tr>
						<td>40</td>
						<td>68.6</td>
						<td>64.1</td>
						<td>60.0</td>
						<td>56.5</td>
						<td>53.3</td>
					</tr>
					<tr>
						<td>41</td>
						<td>70.3</td>
						<td>65.5</td>
						<td>61.4</td>
						<td>57.9</td>
						<td>54.7</td>
					</tr>
					<tr>
						<td>42</td>
						<td>72.0</td>
						<td>67.2</td>
						<td>63.1</td>
						<td>59.3</td>
						<td>56.0</td>
					</tr>
					<tr>
						<td>43</td>
						<td>73.7</td>
						<td>68.9</td>
						<td>64.5</td>
						<td>60.7</td>
						<td>57.3</td>
					</tr>
					<tr>
						<td>44</td>
						<td>75.3</td>
						<td>70.3</td>
						<td>66.0</td>
						<td>62.1</td>
						<td>58.5</td>
					</tr>
					<tr>
						<td>45</td>
						<td>77.0</td>
						<td>72.0</td>
						<td>67.4</td>
						<td>63.6</td>
						<td>60.0</td>
					</tr>
					<tr>
						<td>46</td>
						<td>78.9</td>
						<td>73.7</td>
						<td>69.1</td>
						<td>65.0</td>
						<td>61.4</td>
					</tr>
				</tbody>
			</table>
			<h3 class="bold center secondarycolor">24 X 1 1/8 Gear Chart</h3>
			<table class="highlight responsive-table">
				<thead>
					<tr>
						<th>Chain Wheel</th>
						<th>Freewheel 14</th>
						<th>Freewheel 15</th>
						<th>Freewheel 16</th>
						<th>Freewheel 17</th>
						<th>freewheel 18</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>34</td>
						<td>54.9</td>
						<td>51.3</td>
						<td>48.1</td>
						<td>45.2</td>
						<td>42.7</td>
					</tr>
					<tr>
						<td>35</td>
						<td>56.5</td>
						<td>52.8</td>
						<td>49.5</td>
						<td>46.6</td>
						<td>43.9</td>
					</tr>
					<tr>
						<td>36</td>
						<td>58.1</td>
						<td>54.3</td>
						<td>50.9</td>
						<td>47.9</td>
						<td>45.2</td>
					</tr>
					<tr>
						<td>37</td>
						<td>59.7</td>
						<td>55.8</td>
						<td>52.3</td>
						<td>49.3</td>
						<td>46.6</td>
					</tr>
					<tr>
						<td>38</td>
						<td>61.3</td>
						<td>57.3</td>
						<td>53.7</td>
						<td>50.6</td>
						<td>47.7</td>
					</tr>
					<tr>
						<td>39</td>
						<td>63.1</td>
						<td>58.8</td>
						<td>55.1</td>
						<td>51.9</td>
						<td>49.1</td>
					</tr>
					<tr>
						<td>40</td>
						<td>64.7</td>
						<td>60.3</td>
						<td>56.6</td>
						<td>53.2</td>
						<td>50.3</td>
					</tr>
					<tr>
						<td>41</td>
						<td>66.3</td>
						<td>61.8</td>
						<td>57.9</td>
						<td>54.6</td>
						<td>51.5</td>
					</tr>
					<tr>
						<td>42</td>
						<td>67.9</td>
						<td>63.3</td>
						<td>59.5</td>
						<td>55.9</td>
						<td>52.8</td>
					</tr>
					<tr>
						<td>43</td>
						<td>69.4</td>
						<td>64.9</td>
						<td>60.8</td>
						<td>57.2</td>
						<td>54.0</td>
					</tr>
					<tr>
						<td>44</td>
						<td>71.0</td>
						<td>66.3</td>
						<td>62.2</td>
						<td>58.6</td>
						<td>55.3</td>
					</tr>
					<tr>
						<td>45</td>
						<td>72.6</td>
						<td>67.9</td>
						<td>63.9</td>
						<td>59.9</td>
						<td>56.6</td>
					</tr>
					<tr>
						<td>46</td>
						<td>74.4</td>
						<td>69.4</td>
						<td>65.1</td>
						<td>61.3</td>
						<td>57.9</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- sponsors -->
		<div class="row secondarycolor section marginzero">
			<div class="col s12">
				<h3 class="bold center">Sponsors</h3>
			</div>
		</div>
		<div class="row secondarycolor marginzero sponsor">
			<div class="col s12 m6 l2 xl1 offset-xl2 center-align">
				<a href="http://acomfortbydesign.com/" target="_blank"><img class="responsive-img sponsimg" src="images/acomfortbydesign.jpg" alt="A comfort by design logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.icelandicglacial.com/" target="_blank"><img class="responsive-img sponsimg" src="images/icelandic.jpg" alt="icelandic logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.maxxis.com/" target="_blank"><img class="responsive-img sponsimg" src="images/maxxis.jpg" alt="maxxis logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://visitpeachtreecity.com/" target="_blank"><img class="responsive-img sponsimg" src="images/ptc.png" alt="peachtree logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.rinnai.us/" target="_blank"><img class="responsive-img sponsimg" src="images/rinnai.png" alt="Rinnai Logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="http://www.southsidecycling.com/" target="_blank"><img class="responsive-img sponsimg" src="images/southsidecycling.png" alt="South Side Cycling logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.atlantatrek.com/" target="_blank"><img class="responsive-img sponsimg" src="images/trek.png" alt="Trek logo"></a>
			</div>
			<div class="col s12 m6 l2 xl1 center-align">
				<a href="https://www.ventureshuffleboard.com/" target="_blank"><img class="responsive-img sponsimg" src="images/venture.jpg" alt="Venture logo"></a>
			</div>
		</div>
	</main>
	<footer class="page-footer z-depth-2 section maincolor darken-2">
		<div class="container">
			<div class="row">
				<div class="col s12 l4 flow-text center-align">
					Track Director <br>
					Shayne Robinson<br>
					Phone: 678-770-1750 <br>
					<a href="mailto:ptcbmxbiz@aol.com">ptcbmxbiz@aol.com</a>
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="visitus.php">Dircetions</a> <br>
					200 Mcintosh Trail <br>
					Peachtree City, GA 30269
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="https://www.facebook.com/groups/1571144046444830/" target="_blank"><i class="fab fa-facebook-square facebook"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l4 flow-text center-align">
					Website Developer/Designer <br>
					Jacob Mitchell <br>
					<a href="https://jnmportfolio.000webhostapp.com/">Jacob's Webiste</a>
					<a href="mailto:jacob.mitchell157@gmail.com">Jacob.Mitchell157@gmail.com</a>
				</div>
				<div class="col s12 l4 flow-text center-align">
					Website Administrator <br>
					Anthony Robinson <br>
				</div>
				<div class="col s12 l4 flow-text center-align">
					<a href="sponsorship_program.pdf">Sponsor Us</a>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<p>Copyright &copy; 2018 Jacob Mitchell</p>
			<p class="right-align">
				Last Updated:
				<?php echo $lastupdate ?>
			</p>
		</div>
	</footer>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(".button-collapse").sideNav();
	</script>
</body>

</html>
