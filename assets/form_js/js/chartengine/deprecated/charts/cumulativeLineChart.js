
// This technique works AS IS for month end data points
//   In fact, this works for any series where each value is evenly spaced,
//   and every series starts at the same value and is 1 to 1
//     In other words, values at the same index, need to have the same x value
//     for all series
//
// TODO: now that tooltips don't use jquery, could likely get rid of the charts 
//       collection by simply adding some optional functionality to the model
nv.charts.cumulativeLineChartDaily = function() {
  var selector = null,
      data = [],
      duration = 500,
      tooltip = function(key, x, y, e, graph) { 
        return '<h3>' + key + '</h3>' +
               '<p>' +  y + ' at ' + x + '</p>'
      };


  var graph = nv.models.cumulativeLine()
                .x(function(d,i) { return i })
                .color(d3.scale.category10().range()),
      showTooltip = function(e) {
        var offsetElement = document.getElementById(selector.substr(1)),
            left = e.pos[0] + offsetElement.offsetLeft,
            top = e.pos[1] + offsetElement.offsetTop,
            formatX = graph.xAxis.tickFormat(),
            formatY = graph.yAxis.tickFormat(),
            x = formatX(graph.x()(e, e.pointIndex)),
            //x = formatX(graph.x()(e.point)),
            y = formatY(graph.y()(e.point)),
            content = tooltip(e.series.key, x, y, e, graph);

        nv.tooltip.show([left, top], content);
      };

  //setting component defaults
  //graph.xAxis.tickFormat(d3.format(',r'));
  graph.xAxis.tickFormat(function(d) {
    //return d3.time.format('%x')(new Date(d))
    return d3.time.format('%x')(new Date(data[0].values[d].x))
  });

  //graph.yAxis.tickFormat(d3.format(',.2f'));
  graph.yAxis.tickFormat(d3.format(',.2%'));


  //TODO: consider a method more similar to how the models are built
  function chart() {
    if (!selector || !data.length) return chart; //do nothing if you have nothing to work with

    d3.select(selector).select('svg')
        .datum(data)
      .transition().duration(duration).call(graph); //consider using transition chaining like in the models

    return chart;
  }


  // This should always only be called once, then update should be used after, 
  //     in which case should consider the 'd3 way' and merge this with update, 
  //     but simply do this on enter... will try another example the d3 way
  chart.build = function() {
    if (!selector || !data.length) return chart; //do nothing if you have nothing to work with

    nv.addGraph({
      generate: function() {
        var container = d3.select(selector),
            width = function() { return parseInt(container.style('width')) },
            height = function() { return parseInt(container.style('height')) },
            svg = container.append('svg');

        graph
            .width(width)
            .height(height);

        svg
            .attr('width', width())
            .attr('height', height())
            .datum(data)
          .transition().duration(duration).call(graph);

        return graph;
      },
      callback: function(graph) {
        graph.dispatch.on('tooltipShow', showTooltip);
        graph.dispatch.on('tooltipHide', nv.tooltip.cleanup);

        //TODO: fix issue of multiple graphs failing on resize
        //TODO: create resize queue and have nv core handle resize instead of binding all to window resize
        window.onresize =
        function() {
          // now that width and height are functions, should be automatic..of course you can always override them
          d3.select(selector + ' svg')
              .attr('width', graph.width()()) //need to set SVG dimensions, chart is not aware of the SVG component
              .attr('height', graph.height()())
              .call(graph);
        };
      }
    });

    return chart;
  };


  /*
  //  moved to chart()
  chart.update = function() {
    if (!selector || !data.length) return chart; //do nothing if you have nothing to work with

    d3.select(selector).select('svg')
        .datum(data)
      .transition().duration(duration).call(graph);

    return chart;
  };
  */

  chart.data = function(_) {
    if (!arguments.length) return data;
    data = _;
    return chart;
  };

  chart.selector = function(_) {
    if (!arguments.length) return selector;
    selector = _;
    return chart;
  };

  chart.duration = function(_) {
    if (!arguments.length) return duration;
    duration = _;
    return chart;
  };

  chart.tooltip = function(_) {
    if (!arguments.length) return tooltip;
    tooltip = _;
    return chart;
  };

  chart.xTickFormat = function(_) {
    if (!arguments.length) return graph.xAxis.tickFormat();
    graph.xAxis.tickFormat(typeof _ === 'function' ? _ : d3.format(_));
    return chart;
  };

  chart.yTickFormat = function(_) {
    if (!arguments.length) return graph.yAxis.tickFormat();
    graph.yAxis.tickFormat(typeof _ === 'function' ? _ : d3.format(_));
    return chart;
  };

  chart.xAxisLabel = function(_) {
    if (!arguments.length) return graph.xAxis.axisLabel();
    graph.xAxis.axisLabel(_);
    return chart;
  };

  chart.yAxisLabel = function(_) {
    if (!arguments.length) return graph.yAxis.axisLabel();
    graph.yAxis.axisLabel(_);
    return chart;
  };

  d3.rebind(chart, graph, 'x', 'y');

  chart.graph = graph; // Give direct access for getter/setters, and dispatchers

  return chart;
};


